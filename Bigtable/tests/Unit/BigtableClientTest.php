<?php
/**
 * Copyright 2018, Google LLC All rights reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Bigtable\Tests\Unit;

use Google\Cloud\Bigtable\Admin\V2\BigtableInstanceAdminClient as InstanceAdminClient;
use Google\Cloud\Bigtable\BigtableClient;
use Google\Cloud\Bigtable\Connection\ConnectionInterface;
use Google\Cloud\Bigtable\Instance;
use Google\Cloud\Core\LongRunning\LongRunningOperation;
use Google\Cloud\Core\Testing\GrpcTestTrait;
use Google\Cloud\Core\Testing\TestHelpers;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;

/**
 * @group bigtable
 */
class BigtableClientTest extends TestCase
{
    use GrpcTestTrait;

    const PROJECT_ID = 'my-awesome-project';
    const INSTANCE_ID = 'inst';
    const CLUSTER_ID = 'my-cluster';
    const LOCATION_ID = 'us-east1-b';
    const LOCATION_NAME = 'projects/my-awesome-project/locations/us-east1-b';

    private $client;
    private $connection;

    public function setUp()
    {
        $this->checkAndSkipGrpcTests();

        $this->connection = $this->prophesize(ConnectionInterface::class);
        $this->client = TestHelpers::stub(BigtableClient::class, [
            ['projectId' => self::PROJECT_ID]
        ]);
    }

    public function testInstance()
    {
        $instance = $this->client->instance(self::INSTANCE_ID);
        $this->assertInstanceOf(Instance::class, $instance);
        $this->assertEquals(self::INSTANCE_ID, InstanceAdminClient::parseName($instance->name())['instance']);
    }

    public function testClusterMetadataWithoutClusterId()
    {
        try {
            $this->client->clusterMetadata(null, null);
        }  catch(\Exception $e) {
            $error = 'Cluster id must be set';
            $this->assertEquals($error, $e->getMessage());
        }
    }

    public function testClusterMetadataWithoutLocationId()
    {
        try {
            $this->client->clusterMetadata(self::CLUSTER_ID, null);
        }  catch(\Exception $e) {
            $error = 'Location id must be set';
            $this->assertEquals($error, $e->getMessage());
        }
    }

    public function testClusterMetadata()
    {
        $instance = $this->client->clusterMetadata(self::CLUSTER_ID, self::LOCATION_ID);
        $this->assertEquals($instance['clusterId'], self::CLUSTER_ID);
        $this->assertEquals($instance['locationId'], self::LOCATION_ID);
    }
}
