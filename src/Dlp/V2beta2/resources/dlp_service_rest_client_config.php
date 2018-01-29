<?php

return [
    'interfaces' => [
        'google.privacy.dlp.v2beta2.DlpService' => [
            'InspectContent' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta2/{parent=projects/*}/content:inspect',
                'body' => '*',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'RedactImage' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta2/{parent=projects/*}/image:redact',
                'body' => '*',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'DeidentifyContent' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta2/{parent=projects/*}/content:deidentify',
                'body' => '*',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'ReidentifyContent' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta2/{parent=projects/*}/content:reidentify',
                'body' => '*',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'InspectDataSource' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta2/{parent=projects/*}/dataSource:inspect',
                'body' => '*',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'AnalyzeDataSourceRisk' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta2/{parent=projects/*}/dataSource:analyze',
                'body' => '*',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'ListInfoTypes' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta2/infoTypes',
            ],
            'CreateInspectTemplate' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta2/{parent=organizations/*}/inspectTemplates',
                'body' => '*',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'UpdateInspectTemplate' => [
                'method' => 'patch',
                'uriTemplate' => '/v2beta2/{name=organizations/*/inspectTemplates/*}',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'GetInspectTemplate' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta2/{name=organizations/*/inspectTemplates/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ListInspectTemplates' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta2/{parent=organizations/*}/inspectTemplates',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'DeleteInspectTemplate' => [
                'method' => 'delete',
                'uriTemplate' => '/v2beta2/{name=organizations/*/inspectTemplates/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'CreateDeidentifyTemplate' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta2/{parent=organizations/*}/deidentifyTemplates',
                'body' => '*',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'UpdateDeidentifyTemplate' => [
                'method' => 'patch',
                'uriTemplate' => '/v2beta2/{name=organizations/*/deidentifyTemplates/*}',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'GetDeidentifyTemplate' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta2/{name=organizations/*/deidentifyTemplates/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ListDeidentifyTemplates' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta2/{parent=organizations/*}/deidentifyTemplates',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'DeleteDeidentifyTemplate' => [
                'method' => 'delete',
                'uriTemplate' => '/v2beta2/{name=organizations/*/deidentifyTemplates/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ListDlpJobs' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta2/{parent=projects/*}/dlpJobs',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'GetDlpJob' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta2/{name=projects/*/dlpJobs/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'DeleteDlpJob' => [
                'method' => 'delete',
                'uriTemplate' => '/v2beta2/{name=projects/*/dlpJobs/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'CancelDlpJob' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta2/{name=projects/*/dlpJobs/*}:cancel',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
