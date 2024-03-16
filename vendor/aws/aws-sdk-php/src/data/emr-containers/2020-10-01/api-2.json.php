<?php
// This file was auto-generated from sdk-root/src/data/emr-containers/2020-10-01/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2020-10-01', 'endpointPrefix' => 'emr-containers', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'Amazon EMR Containers', 'serviceId' => 'EMR containers', 'signatureVersion' => 'v4', 'signingName' => 'emr-containers', 'uid' => 'emr-containers-2020-10-01', ], 'operations' => [ 'CancelJobRun' => [ 'name' => 'CancelJobRun', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/virtualclusters/{virtualClusterId}/jobruns/{jobRunId}', ], 'input' => [ 'shape' => 'CancelJobRunRequest', ], 'output' => [ 'shape' => 'CancelJobRunResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'CreateJobTemplate' => [ 'name' => 'CreateJobTemplate', 'http' => [ 'method' => 'POST', 'requestUri' => '/jobtemplates', ], 'input' => [ 'shape' => 'CreateJobTemplateRequest', ], 'output' => [ 'shape' => 'CreateJobTemplateResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], ], ], 'CreateManagedEndpoint' => [ 'name' => 'CreateManagedEndpoint', 'http' => [ 'method' => 'POST', 'requestUri' => '/virtualclusters/{virtualClusterId}/endpoints', ], 'input' => [ 'shape' => 'CreateManagedEndpointRequest', ], 'output' => [ 'shape' => 'CreateManagedEndpointResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], ], ], 'CreateVirtualCluster' => [ 'name' => 'CreateVirtualCluster', 'http' => [ 'method' => 'POST', 'requestUri' => '/virtualclusters', ], 'input' => [ 'shape' => 'CreateVirtualClusterRequest', ], 'output' => [ 'shape' => 'CreateVirtualClusterResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DeleteJobTemplate' => [ 'name' => 'DeleteJobTemplate', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/jobtemplates/{templateId}', ], 'input' => [ 'shape' => 'DeleteJobTemplateRequest', ], 'output' => [ 'shape' => 'DeleteJobTemplateResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DeleteManagedEndpoint' => [ 'name' => 'DeleteManagedEndpoint', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/virtualclusters/{virtualClusterId}/endpoints/{endpointId}', ], 'input' => [ 'shape' => 'DeleteManagedEndpointRequest', ], 'output' => [ 'shape' => 'DeleteManagedEndpointResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DeleteVirtualCluster' => [ 'name' => 'DeleteVirtualCluster', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/virtualclusters/{virtualClusterId}', ], 'input' => [ 'shape' => 'DeleteVirtualClusterRequest', ], 'output' => [ 'shape' => 'DeleteVirtualClusterResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DescribeJobRun' => [ 'name' => 'DescribeJobRun', 'http' => [ 'method' => 'GET', 'requestUri' => '/virtualclusters/{virtualClusterId}/jobruns/{jobRunId}', ], 'input' => [ 'shape' => 'DescribeJobRunRequest', ], 'output' => [ 'shape' => 'DescribeJobRunResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DescribeJobTemplate' => [ 'name' => 'DescribeJobTemplate', 'http' => [ 'method' => 'GET', 'requestUri' => '/jobtemplates/{templateId}', ], 'input' => [ 'shape' => 'DescribeJobTemplateRequest', ], 'output' => [ 'shape' => 'DescribeJobTemplateResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DescribeManagedEndpoint' => [ 'name' => 'DescribeManagedEndpoint', 'http' => [ 'method' => 'GET', 'requestUri' => '/virtualclusters/{virtualClusterId}/endpoints/{endpointId}', ], 'input' => [ 'shape' => 'DescribeManagedEndpointRequest', ], 'output' => [ 'shape' => 'DescribeManagedEndpointResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DescribeVirtualCluster' => [ 'name' => 'DescribeVirtualCluster', 'http' => [ 'method' => 'GET', 'requestUri' => '/virtualclusters/{virtualClusterId}', ], 'input' => [ 'shape' => 'DescribeVirtualClusterRequest', ], 'output' => [ 'shape' => 'DescribeVirtualClusterResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], ], ], 'GetManagedEndpointSessionCredentials' => [ 'name' => 'GetManagedEndpointSessionCredentials', 'http' => [ 'method' => 'POST', 'requestUri' => '/virtualclusters/{virtualClusterId}/endpoints/{endpointId}/credentials', ], 'input' => [ 'shape' => 'GetManagedEndpointSessionCredentialsRequest', ], 'output' => [ 'shape' => 'GetManagedEndpointSessionCredentialsResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'RequestThrottledException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListJobRuns' => [ 'name' => 'ListJobRuns', 'http' => [ 'method' => 'GET', 'requestUri' => '/virtualclusters/{virtualClusterId}/jobruns', ], 'input' => [ 'shape' => 'ListJobRunsRequest', ], 'output' => [ 'shape' => 'ListJobRunsResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListJobTemplates' => [ 'name' => 'ListJobTemplates', 'http' => [ 'method' => 'GET', 'requestUri' => '/jobtemplates', ], 'input' => [ 'shape' => 'ListJobTemplatesRequest', ], 'output' => [ 'shape' => 'ListJobTemplatesResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListManagedEndpoints' => [ 'name' => 'ListManagedEndpoints', 'http' => [ 'method' => 'GET', 'requestUri' => '/virtualclusters/{virtualClusterId}/endpoints', ], 'input' => [ 'shape' => 'ListManagedEndpointsRequest', ], 'output' => [ 'shape' => 'ListManagedEndpointsResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/tags/{resourceArn}', ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'ListVirtualClusters' => [ 'name' => 'ListVirtualClusters', 'http' => [ 'method' => 'GET', 'requestUri' => '/virtualclusters', ], 'input' => [ 'shape' => 'ListVirtualClustersRequest', ], 'output' => [ 'shape' => 'ListVirtualClustersResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'StartJobRun' => [ 'name' => 'StartJobRun', 'http' => [ 'method' => 'POST', 'requestUri' => '/virtualclusters/{virtualClusterId}/jobruns', ], 'input' => [ 'shape' => 'StartJobRunRequest', ], 'output' => [ 'shape' => 'StartJobRunResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/tags/{resourceArn}', ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'output' => [ 'shape' => 'TagResourceResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/tags/{resourceArn}', ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'output' => [ 'shape' => 'UntagResourceResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], ], 'shapes' => [ 'ACMCertArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 44, 'pattern' => '^arn:(aws[a-zA-Z0-9-]*):acm:.+:(\\d{12}):certificate/.+$', ], 'Base64Encoded' => [ 'type' => 'string', 'max' => 5000, 'pattern' => '^([A-Za-z0-9+/]{4})*([A-Za-z0-9+/]{4}|[A-Za-z0-9+/]{3}=|[A-Za-z0-9+/]{2}==)?$', ], 'CancelJobRunRequest' => [ 'type' => 'structure', 'required' => [ 'id', 'virtualClusterId', ], 'members' => [ 'id' => [ 'shape' => 'ResourceIdString', 'location' => 'uri', 'locationName' => 'jobRunId', ], 'virtualClusterId' => [ 'shape' => 'ResourceIdString', 'location' => 'uri', 'locationName' => 'virtualClusterId', ], ], ], 'CancelJobRunResponse' => [ 'type' => 'structure', 'members' => [ 'id' => [ 'shape' => 'ResourceIdString', ], 'virtualClusterId' => [ 'shape' => 'ResourceIdString', ], ], ], 'Certificate' => [ 'type' => 'structure', 'members' => [ 'certificateArn' => [ 'shape' => 'ACMCertArn', ], 'certificateData' => [ 'shape' => 'Base64Encoded', ], ], ], 'ClientToken' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '.*\\S.*', ], 'CloudWatchMonitoringConfiguration' => [ 'type' => 'structure', 'required' => [ 'logGroupName', ], 'members' => [ 'logGroupName' => [ 'shape' => 'LogGroupName', ], 'logStreamNamePrefix' => [ 'shape' => 'String256', ], ], ], 'ClusterId' => [ 'type' => 'string', 'max' => 100, 'min' => 1, 'pattern' => '^[0-9A-Za-z][A-Za-z0-9\\-_]*', ], 'Configuration' => [ 'type' => 'structure', 'required' => [ 'classification', ], 'members' => [ 'classification' => [ 'shape' => 'String1024', ], 'properties' => [ 'shape' => 'SensitivePropertiesMap', ], 'configurations' => [ 'shape' => 'ConfigurationList', ], ], ], 'ConfigurationList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Configuration', ], 'max' => 100, ], 'ConfigurationOverrides' => [ 'type' => 'structure', 'members' => [ 'applicationConfiguration' => [ 'shape' => 'ConfigurationList', ], 'monitoringConfiguration' => [ 'shape' => 'MonitoringConfiguration', ], ], ], 'ContainerInfo' => [ 'type' => 'structure', 'members' => [ 'eksInfo' => [ 'shape' => 'EksInfo', ], ], 'union' => true, ], 'ContainerLogRotationConfiguration' => [ 'type' => 'structure', 'required' => [ 'rotationSize', 'maxFilesToKeep', ], 'members' => [ 'rotationSize' => [ 'shape' => 'RotationSize', ], 'maxFilesToKeep' => [ 'shape' => 'MaxFilesToKeep', ], ], ], 'ContainerProvider' => [ 'type' => 'structure', 'required' => [ 'type', 'id', ], 'members' => [ 'type' => [ 'shape' => 'ContainerProviderType', ], 'id' => [ 'shape' => 'ClusterId', ], 'info' => [ 'shape' => 'ContainerInfo', ], ], ], 'ContainerProviderType' => [ 'type' => 'string', 'enum' => [ 'EKS', ], ], 'CreateJobTemplateRequest' => [ 'type' => 'structure', 'required' => [ 'name', 'clientToken', 'jobTemplateData', ], 'members' => [ 'name' => [ 'shape' => 'ResourceNameString', ], 'clientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, ], 'jobTemplateData' => [ 'shape' => 'JobTemplateData', ], 'tags' => [ 'shape' => 'TagMap', ], 'kmsKeyArn' => [ 'shape' => 'KmsKeyArn', ], ], ], 'CreateJobTemplateResponse' => [ 'type' => 'structure', 'members' => [ 'id' => [ 'shape' => 'ResourceIdString', ], 'name' => [ 'shape' => 'ResourceNameString', ], 'arn' => [ 'shape' => 'JobTemplateArn', ], 'createdAt' => [ 'shape' => 'Date', ], ], ], 'CreateManagedEndpointRequest' => [ 'type' => 'structure', 'required' => [ 'name', 'virtualClusterId', 'type', 'releaseLabel', 'executionRoleArn', 'clientToken', ], 'members' => [ 'name' => [ 'shape' => 'ResourceNameString', ], 'virtualClusterId' => [ 'shape' => 'ResourceIdString', 'location' => 'uri', 'locationName' => 'virtualClusterId', ], 'type' => [ 'shape' => 'EndpointType', ], 'releaseLabel' => [ 'shape' => 'ReleaseLabel', ], 'executionRoleArn' => [ 'shape' => 'IAMRoleArn', ], 'certificateArn' => [ 'shape' => 'ACMCertArn', 'deprecated' => true, 'deprecatedMessage' => 'Customer provided certificate-arn is deprecated and would be removed in future.', ], 'configurationOverrides' => [ 'shape' => 'ConfigurationOverrides', ], 'clientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'CreateManagedEndpointResponse' => [ 'type' => 'structure', 'members' => [ 'id' => [ 'shape' => 'ResourceIdString', ], 'name' => [ 'shape' => 'ResourceNameString', ], 'arn' => [ 'shape' => 'EndpointArn', ], 'virtualClusterId' => [ 'shape' => 'ResourceIdString', ], ], ], 'CreateVirtualClusterRequest' => [ 'type' => 'structure', 'required' => [ 'name', 'containerProvider', 'clientToken', ], 'members' => [ 'name' => [ 'shape' => 'ResourceNameString', ], 'containerProvider' => [ 'shape' => 'ContainerProvider', ], 'clientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'CreateVirtualClusterResponse' => [ 'type' => 'structure', 'members' => [ 'id' => [ 'shape' => 'ResourceIdString', ], 'name' => [ 'shape' => 'ResourceNameString', ], 'arn' => [ 'shape' => 'VirtualClusterArn', ], ], ], 'CredentialType' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '^.*\\S.*$', ], 'Credentials' => [ 'type' => 'structure', 'members' => [ 'token' => [ 'shape' => 'Token', ], ], 'union' => true, ], 'Date' => [ 'type' => 'timestamp', 'timestampFormat' => 'iso8601', ], 'DeleteJobTemplateRequest' => [ 'type' => 'structure', 'required' => [ 'id', ], 'members' => [ 'id' => [ 'shape' => 'ResourceIdString', 'location' => 'uri', 'locationName' => 'templateId', ], ], ], 'DeleteJobTemplateResponse' => [ 'type' => 'structure', 'members' => [ 'id' => [ 'shape' => 'ResourceIdString', ], ], ], 'DeleteManagedEndpointRequest' => [ 'type' => 'structure', 'required' => [ 'id', 'virtualClusterId', ], 'members' => [ 'id' => [ 'shape' => 'ResourceIdString', 'location' => 'uri', 'locationName' => 'endpointId', ], 'virtualClusterId' => [ 'shape' => 'ResourceIdString', 'location' => 'uri', 'locationName' => 'virtualClusterId', ], ], ], 'DeleteManagedEndpointResponse' => [ 'type' => 'structure', 'members' => [ 'id' => [ 'shape' => 'ResourceIdString', ], 'virtualClusterId' => [ 'shape' => 'ResourceIdString', ], ], ], 'DeleteVirtualClusterRequest' => [ 'type' => 'structure', 'required' => [ 'id', ], 'members' => [ 'id' => [ 'shape' => 'ResourceIdString', 'location' => 'uri', 'locationName' => 'virtualClusterId', ], ], ], 'DeleteVirtualClusterResponse' => [ 'type' => 'structure', 'members' => [ 'id' => [ 'shape' => 'ResourceIdString', ], ], ], 'DescribeJobRunRequest' => [ 'type' => 'structure', 'required' => [ 'id', 'virtualClusterId', ], 'members' => [ 'id' => [ 'shape' => 'ResourceIdString', 'location' => 'uri', 'locationName' => 'jobRunId', ], 'virtualClusterId' => [ 'shape' => 'ResourceIdString', 'location' => 'uri', 'locationName' => 'virtualClusterId', ], ], ], 'DescribeJobRunResponse' => [ 'type' => 'structure', 'members' => [ 'jobRun' => [ 'shape' => 'JobRun', ], ], ], 'DescribeJobTemplateRequest' => [ 'type' => 'structure', 'required' => [ 'id', ], 'members' => [ 'id' => [ 'shape' => 'ResourceIdString', 'location' => 'uri', 'locationName' => 'templateId', ], ], ], 'DescribeJobTemplateResponse' => [ 'type' => 'structure', 'members' => [ 'jobTemplate' => [ 'shape' => 'JobTemplate', ], ], ], 'DescribeManagedEndpointRequest' => [ 'type' => 'structure', 'required' => [ 'id', 'virtualClusterId', ], 'members' => [ 'id' => [ 'shape' => 'ResourceIdString', 'location' => 'uri', 'locationName' => 'endpointId', ], 'virtualClusterId' => [ 'shape' => 'ResourceIdString', 'location' => 'uri', 'locationName' => 'virtualClusterId', ], ], ], 'DescribeManagedEndpointResponse' => [ 'type' => 'structure', 'members' => [ 'endpoint' => [ 'shape' => 'Endpoint', ], ], ], 'DescribeVirtualClusterRequest' => [ 'type' => 'structure', 'required' => [ 'id', ], 'members' => [ 'id' => [ 'shape' => 'ResourceIdString', 'location' => 'uri', 'locationName' => 'virtualClusterId', ], ], ], 'DescribeVirtualClusterResponse' => [ 'type' => 'structure', 'members' => [ 'virtualCluster' => [ 'shape' => 'VirtualCluster', ], ], ], 'EksInfo' => [ 'type' => 'structure', 'members' => [ 'namespace' => [ 'shape' => 'KubernetesNamespace', ], ], ], 'Endpoint' => [ 'type' => 'structure', 'members' => [ 'id' => [ 'shape' => 'ResourceIdString', ], 'name' => [ 'shape' => 'ResourceNameString', ], 'arn' => [ 'shape' => 'EndpointArn', ], 'virtualClusterId' => [ 'shape' => 'ResourceIdString', ], 'type' => [ 'shape' => 'EndpointType', ], 'state' => [ 'shape' => 'EndpointState', ], 'releaseLabel' => [ 'shape' => 'ReleaseLabel', ], 'executionRoleArn' => [ 'shape' => 'IAMRoleArn', ], 'certificateArn' => [ 'shape' => 'ACMCertArn', 'deprecated' => true, 'deprecatedMessage' => 'Customer provided certificate-arn is deprecated and would be removed in future.', ], 'certificateAuthority' => [ 'shape' => 'Certificate', ], 'configurationOverrides' => [ 'shape' => 'ConfigurationOverrides', ], 'serverUrl' => [ 'shape' => 'UriString', ], 'createdAt' => [ 'shape' => 'Date', ], 'securityGroup' => [ 'shape' => 'String256', ], 'subnetIds' => [ 'shape' => 'SubnetIds', ], 'stateDetails' => [ 'shape' => 'String256', ], 'failureReason' => [ 'shape' => 'FailureReason', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'EndpointArn' => [ 'type' => 'string', 'max' => 1024, 'min' => 60, 'pattern' => '^arn:(aws[a-zA-Z0-9-]*):emr-containers:.+:(\\d{12}):\\/virtualclusters\\/[0-9a-zA-Z]+\\/endpoints\\/[0-9a-zA-Z]+$', ], 'EndpointState' => [ 'type' => 'string', 'enum' => [ 'CREATING', 'ACTIVE', 'TERMINATING', 'TERMINATED', 'TERMINATED_WITH_ERRORS', ], ], 'EndpointStates' => [ 'type' => 'list', 'member' => [ 'shape' => 'EndpointState', ], 'max' => 10, ], 'EndpointType' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '.*\\S.*', ], 'EndpointTypes' => [ 'type' => 'list', 'member' => [ 'shape' => 'EndpointType', ], 'max' => 10, ], 'Endpoints' => [ 'type' => 'list', 'member' => [ 'shape' => 'Endpoint', ], ], 'EntryPointArgument' => [ 'type' => 'string', 'max' => 10280, 'min' => 1, 'pattern' => '.*\\S.*', 'sensitive' => true, ], 'EntryPointArguments' => [ 'type' => 'list', 'member' => [ 'shape' => 'EntryPointArgument', ], ], 'EntryPointPath' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '.*\\S.*', 'sensitive' => true, ], 'FailureReason' => [ 'type' => 'string', 'enum' => [ 'INTERNAL_ERROR', 'USER_ERROR', 'VALIDATION_ERROR', 'CLUSTER_UNAVAILABLE', ], ], 'GetManagedEndpointSessionCredentialsRequest' => [ 'type' => 'structure', 'required' => [ 'executionRoleArn', 'credentialType', 'endpointIdentifier', 'virtualClusterIdentifier', ], 'members' => [ 'endpointIdentifier' => [ 'shape' => 'String2048', 'location' => 'uri', 'locationName' => 'endpointId', ], 'virtualClusterIdentifier' => [ 'shape' => 'String2048', 'location' => 'uri', 'locationName' => 'virtualClusterId', ], 'executionRoleArn' => [ 'shape' => 'IAMRoleArn', ], 'credentialType' => [ 'shape' => 'CredentialType', ], 'durationInSeconds' => [ 'shape' => 'JavaInteger', ], 'logContext' => [ 'shape' => 'LogContext', ], 'clientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, ], ], ], 'GetManagedEndpointSessionCredentialsResponse' => [ 'type' => 'structure', 'members' => [ 'id' => [ 'shape' => 'ResourceIdString', ], 'credentials' => [ 'shape' => 'Credentials', ], 'expiresAt' => [ 'shape' => 'Date', ], ], ], 'IAMRoleArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 20, 'pattern' => '^arn:(aws[a-zA-Z0-9-]*):iam::(\\d{12})?:(role((\\u002F)|(\\u002F[\\u0021-\\u007F]+\\u002F))[\\w+=,.@-]+)$', ], 'InternalServerException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String1024', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, ], 'JavaInteger' => [ 'type' => 'integer', ], 'JobArn' => [ 'type' => 'string', 'max' => 1024, 'min' => 60, 'pattern' => '^arn:(aws[a-zA-Z0-9-]*):emr-containers:.+:(\\d{12}):\\/virtualclusters\\/[0-9a-zA-Z]+\\/jobruns\\/[0-9a-zA-Z]+$', ], 'JobDriver' => [ 'type' => 'structure', 'members' => [ 'sparkSubmitJobDriver' => [ 'shape' => 'SparkSubmitJobDriver', ], 'sparkSqlJobDriver' => [ 'shape' => 'SparkSqlJobDriver', ], ], ], 'JobRun' => [ 'type' => 'structure', 'members' => [ 'id' => [ 'shape' => 'ResourceIdString', ], 'name' => [ 'shape' => 'ResourceNameString', ], 'virtualClusterId' => [ 'shape' => 'ResourceIdString', ], 'arn' => [ 'shape' => 'JobArn', ], 'state' => [ 'shape' => 'JobRunState', ], 'clientToken' => [ 'shape' => 'ClientToken', ], 'executionRoleArn' => [ 'shape' => 'IAMRoleArn', ], 'releaseLabel' => [ 'shape' => 'ReleaseLabel', ], 'configurationOverrides' => [ 'shape' => 'ConfigurationOverrides', ], 'jobDriver' => [ 'shape' => 'JobDriver', ], 'createdAt' => [ 'shape' => 'Date', ], 'createdBy' => [ 'shape' => 'RequestIdentityUserArn', ], 'finishedAt' => [ 'shape' => 'Date', ], 'stateDetails' => [ 'shape' => 'String256', ], 'failureReason' => [ 'shape' => 'FailureReason', ], 'tags' => [ 'shape' => 'TagMap', ], 'retryPolicyConfiguration' => [ 'shape' => 'RetryPolicyConfiguration', ], 'retryPolicyExecution' => [ 'shape' => 'RetryPolicyExecution', ], ], ], 'JobRunState' => [ 'type' => 'string', 'enum' => [ 'PENDING', 'SUBMITTED', 'RUNNING', 'FAILED', 'CANCELLED', 'CANCEL_PENDING', 'COMPLETED', ], ], 'JobRunStates' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobRunState', ], 'max' => 10, ], 'JobRuns' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobRun', ], ], 'JobTemplate' => [ 'type' => 'structure', 'required' => [ 'jobTemplateData', ], 'members' => [ 'name' => [ 'shape' => 'ResourceNameString', ], 'id' => [ 'shape' => 'ResourceIdString', ], 'arn' => [ 'shape' => 'JobTemplateArn', ], 'createdAt' => [ 'shape' => 'Date', ], 'createdBy' => [ 'shape' => 'RequestIdentityUserArn', ], 'tags' => [ 'shape' => 'TagMap', ], 'jobTemplateData' => [ 'shape' => 'JobTemplateData', ], 'kmsKeyArn' => [ 'shape' => 'KmsKeyArn', ], 'decryptionError' => [ 'shape' => 'String2048', ], ], ], 'JobTemplateArn' => [ 'type' => 'string', 'max' => 1024, 'min' => 60, 'pattern' => '^arn:(aws[a-zA-Z0-9-]*):emr-containers:.+:(\\d{12}):\\/jobtemplates\\/[0-9a-zA-Z]+$', ], 'JobTemplateData' => [ 'type' => 'structure', 'required' => [ 'executionRoleArn', 'releaseLabel', 'jobDriver', ], 'members' => [ 'executionRoleArn' => [ 'shape' => 'ParametricIAMRoleArn', ], 'releaseLabel' => [ 'shape' => 'ParametricReleaseLabel', ], 'configurationOverrides' => [ 'shape' => 'ParametricConfigurationOverrides', ], 'jobDriver' => [ 'shape' => 'JobDriver', ], 'parameterConfiguration' => [ 'shape' => 'TemplateParameterConfigurationMap', ], 'jobTags' => [ 'shape' => 'TagMap', ], ], ], 'JobTemplates' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobTemplate', ], ], 'KmsKeyArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 3, 'pattern' => '^(arn:(aws[a-zA-Z0-9-]*):kms:.+:(\\d{12})?:key\\/[(0-9a-zA-Z)-?]+|\\$\\{[a-zA-Z]\\w*\\})$', ], 'KubernetesNamespace' => [ 'type' => 'string', 'max' => 63, 'min' => 1, 'pattern' => '[a-z0-9]([-a-z0-9]*[a-z0-9])?', ], 'ListJobRunsRequest' => [ 'type' => 'structure', 'required' => [ 'virtualClusterId', ], 'members' => [ 'virtualClusterId' => [ 'shape' => 'ResourceIdString', 'location' => 'uri', 'locationName' => 'virtualClusterId', ], 'createdBefore' => [ 'shape' => 'Date', 'location' => 'querystring', 'locationName' => 'createdBefore', ], 'createdAfter' => [ 'shape' => 'Date', 'location' => 'querystring', 'locationName' => 'createdAfter', ], 'name' => [ 'shape' => 'ResourceNameString', 'location' => 'querystring', 'locationName' => 'name', ], 'states' => [ 'shape' => 'JobRunStates', 'location' => 'querystring', 'locationName' => 'states', ], 'maxResults' => [ 'shape' => 'JavaInteger', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'nextToken' => [ 'shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], ], ], 'ListJobRunsResponse' => [ 'type' => 'structure', 'members' => [ 'jobRuns' => [ 'shape' => 'JobRuns', ], 'nextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListJobTemplatesRequest' => [ 'type' => 'structure', 'members' => [ 'createdAfter' => [ 'shape' => 'Date', 'location' => 'querystring', 'locationName' => 'createdAfter', ], 'createdBefore' => [ 'shape' => 'Date', 'location' => 'querystring', 'locationName' => 'createdBefore', ], 'maxResults' => [ 'shape' => 'JavaInteger', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'nextToken' => [ 'shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], ], ], 'ListJobTemplatesResponse' => [ 'type' => 'structure', 'members' => [ 'templates' => [ 'shape' => 'JobTemplates', ], 'nextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListManagedEndpointsRequest' => [ 'type' => 'structure', 'required' => [ 'virtualClusterId', ], 'members' => [ 'virtualClusterId' => [ 'shape' => 'ResourceIdString', 'location' => 'uri', 'locationName' => 'virtualClusterId', ], 'createdBefore' => [ 'shape' => 'Date', 'location' => 'querystring', 'locationName' => 'createdBefore', ], 'createdAfter' => [ 'shape' => 'Date', 'location' => 'querystring', 'locationName' => 'createdAfter', ], 'types' => [ 'shape' => 'EndpointTypes', 'location' => 'querystring', 'locationName' => 'types', ], 'states' => [ 'shape' => 'EndpointStates', 'location' => 'querystring', 'locationName' => 'states', ], 'maxResults' => [ 'shape' => 'JavaInteger', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'nextToken' => [ 'shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], ], ], 'ListManagedEndpointsResponse' => [ 'type' => 'structure', 'members' => [ 'endpoints' => [ 'shape' => 'Endpoints', ], 'nextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', ], 'members' => [ 'resourceArn' => [ 'shape' => 'RsiArn', 'location' => 'uri', 'locationName' => 'resourceArn', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'tags' => [ 'shape' => 'TagMap', ], ], ], 'ListVirtualClustersRequest' => [ 'type' => 'structure', 'members' => [ 'containerProviderId' => [ 'shape' => 'String1024', 'location' => 'querystring', 'locationName' => 'containerProviderId', ], 'containerProviderType' => [ 'shape' => 'ContainerProviderType', 'location' => 'querystring', 'locationName' => 'containerProviderType', ], 'createdAfter' => [ 'shape' => 'Date', 'location' => 'querystring', 'locationName' => 'createdAfter', ], 'createdBefore' => [ 'shape' => 'Date', 'location' => 'querystring', 'locationName' => 'createdBefore', ], 'states' => [ 'shape' => 'VirtualClusterStates', 'location' => 'querystring', 'locationName' => 'states', ], 'maxResults' => [ 'shape' => 'JavaInteger', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'nextToken' => [ 'shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], ], ], 'ListVirtualClustersResponse' => [ 'type' => 'structure', 'members' => [ 'virtualClusters' => [ 'shape' => 'VirtualClusters', ], 'nextToken' => [ 'shape' => 'NextToken', ], ], ], 'LogContext' => [ 'type' => 'string', 'max' => 63, 'min' => 3, 'pattern' => '^((?!.*-s3alias)(?!xn--.*)[a-z0-9][-a-z0-9.]*)?[a-z0-9]$', ], 'LogGroupName' => [ 'type' => 'string', 'max' => 512, 'min' => 1, 'pattern' => '[\\.\\-_/#A-Za-z0-9]+', ], 'MaxFilesToKeep' => [ 'type' => 'integer', 'max' => 50, 'min' => 1, ], 'MonitoringConfiguration' => [ 'type' => 'structure', 'members' => [ 'persistentAppUI' => [ 'shape' => 'PersistentAppUI', ], 'cloudWatchMonitoringConfiguration' => [ 'shape' => 'CloudWatchMonitoringConfiguration', ], 's3MonitoringConfiguration' => [ 'shape' => 'S3MonitoringConfiguration', ], 'containerLogRotationConfiguration' => [ 'shape' => 'ContainerLogRotationConfiguration', ], ], ], 'NextToken' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, 'pattern' => '.*\\S.*', ], 'ParametricCloudWatchMonitoringConfiguration' => [ 'type' => 'structure', 'members' => [ 'logGroupName' => [ 'shape' => 'TemplateParameter', ], 'logStreamNamePrefix' => [ 'shape' => 'String256', ], ], ], 'ParametricConfigurationOverrides' => [ 'type' => 'structure', 'members' => [ 'applicationConfiguration' => [ 'shape' => 'ConfigurationList', ], 'monitoringConfiguration' => [ 'shape' => 'ParametricMonitoringConfiguration', ], ], ], 'ParametricIAMRoleArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 4, 'pattern' => '(^arn:(aws[a-zA-Z0-9-]*):iam::(\\d{12})?:(role((\\u002F)|(\\u002F[\\u0021-\\u007F]+\\u002F))[\\w+=,.@-]+)$)|([\\.\\-_\\#A-Za-z0-9\\$\\{\\}]+)', ], 'ParametricMonitoringConfiguration' => [ 'type' => 'structure', 'members' => [ 'persistentAppUI' => [ 'shape' => 'TemplateParameter', ], 'cloudWatchMonitoringConfiguration' => [ 'shape' => 'ParametricCloudWatchMonitoringConfiguration', ], 's3MonitoringConfiguration' => [ 'shape' => 'ParametricS3MonitoringConfiguration', ], ], ], 'ParametricReleaseLabel' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '([\\.\\-_/A-Za-z0-9]+|\\$\\{[a-zA-Z]\\w*\\})', ], 'ParametricS3MonitoringConfiguration' => [ 'type' => 'structure', 'members' => [ 'logUri' => [ 'shape' => 'UriString', ], ], ], 'PersistentAppUI' => [ 'type' => 'string', 'enum' => [ 'ENABLED', 'DISABLED', ], ], 'ReleaseLabel' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '[\\.\\-_/A-Za-z0-9]+', ], 'RequestIdentityUserArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 20, 'pattern' => '^arn:(aws[a-zA-Z0-9-]*):(iam|sts)::(\\d{12})?:[\\w/+=,.@-]+$', ], 'RequestThrottledException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String1024', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'ResourceIdString' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '[0-9a-z]+', ], 'ResourceNameString' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '[\\.\\-_/#A-Za-z0-9]+', ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String1024', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'RetryPolicyConfiguration' => [ 'type' => 'structure', 'required' => [ 'maxAttempts', ], 'members' => [ 'maxAttempts' => [ 'shape' => 'JavaInteger', ], ], ], 'RetryPolicyExecution' => [ 'type' => 'structure', 'required' => [ 'currentAttemptCount', ], 'members' => [ 'currentAttemptCount' => [ 'shape' => 'JavaInteger', ], ], ], 'RotationSize' => [ 'type' => 'string', 'max' => 12, 'min' => 3, 'pattern' => '^\\d+(\\.\\d+)?[KMG][Bb]?$', ], 'RsiArn' => [ 'type' => 'string', 'max' => 500, 'min' => 60, 'pattern' => '^arn:(aws[a-zA-Z0-9-]*):emr-containers:.+:(\\d{12}):/virtualclusters/.+$', ], 'S3MonitoringConfiguration' => [ 'type' => 'structure', 'required' => [ 'logUri', ], 'members' => [ 'logUri' => [ 'shape' => 'UriString', ], ], ], 'SensitivePropertiesMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'String1024', ], 'value' => [ 'shape' => 'String1024', ], 'max' => 100, 'sensitive' => true, ], 'SparkSqlJobDriver' => [ 'type' => 'structure', 'members' => [ 'entryPoint' => [ 'shape' => 'EntryPointPath', ], 'sparkSqlParameters' => [ 'shape' => 'SparkSqlParameters', ], ], ], 'SparkSqlParameters' => [ 'type' => 'string', 'max' => 102400, 'min' => 1, 'pattern' => '.*\\S.*', 'sensitive' => true, ], 'SparkSubmitJobDriver' => [ 'type' => 'structure', 'required' => [ 'entryPoint', ], 'members' => [ 'entryPoint' => [ 'shape' => 'EntryPointPath', ], 'entryPointArguments' => [ 'shape' => 'EntryPointArguments', ], 'sparkSubmitParameters' => [ 'shape' => 'SparkSubmitParameters', ], ], ], 'SparkSubmitParameters' => [ 'type' => 'string', 'max' => 102400, 'min' => 1, 'pattern' => '.*\\S.*', 'sensitive' => true, ], 'StartJobRunRequest' => [ 'type' => 'structure', 'required' => [ 'virtualClusterId', 'clientToken', ], 'members' => [ 'name' => [ 'shape' => 'ResourceNameString', ], 'virtualClusterId' => [ 'shape' => 'ResourceIdString', 'location' => 'uri', 'locationName' => 'virtualClusterId', ], 'clientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, ], 'executionRoleArn' => [ 'shape' => 'IAMRoleArn', ], 'releaseLabel' => [ 'shape' => 'ReleaseLabel', ], 'jobDriver' => [ 'shape' => 'JobDriver', ], 'configurationOverrides' => [ 'shape' => 'ConfigurationOverrides', ], 'tags' => [ 'shape' => 'TagMap', ], 'jobTemplateId' => [ 'shape' => 'ResourceIdString', ], 'jobTemplateParameters' => [ 'shape' => 'TemplateParameterInputMap', ], 'retryPolicyConfiguration' => [ 'shape' => 'RetryPolicyConfiguration', ], ], ], 'StartJobRunResponse' => [ 'type' => 'structure', 'members' => [ 'id' => [ 'shape' => 'ResourceIdString', ], 'name' => [ 'shape' => 'ResourceNameString', ], 'arn' => [ 'shape' => 'JobArn', ], 'virtualClusterId' => [ 'shape' => 'ResourceIdString', ], ], ], 'String1024' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, 'pattern' => '.*\\S.*', ], 'String128' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '.*\\S.*', ], 'String2048' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => '.*\\S.*', ], 'String256' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '.*\\S.*', ], 'StringEmpty256' => [ 'type' => 'string', 'max' => 256, 'min' => 0, 'pattern' => '.*\\S.*', ], 'SubnetIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'String256', ], ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String128', ], 'max' => 50, 'min' => 0, ], 'TagMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'String128', ], 'value' => [ 'shape' => 'StringEmpty256', ], 'max' => 50, 'min' => 0, ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tags', ], 'members' => [ 'resourceArn' => [ 'shape' => 'RsiArn', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'TagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'TemplateParameter' => [ 'type' => 'string', 'max' => 512, 'min' => 1, 'pattern' => '[\\.\\-_/#A-Za-z0-9\\$\\{\\}]+', ], 'TemplateParameterConfiguration' => [ 'type' => 'structure', 'members' => [ 'type' => [ 'shape' => 'TemplateParameterDataType', ], 'defaultValue' => [ 'shape' => 'String1024', ], ], ], 'TemplateParameterConfigurationMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'TemplateParameterName', ], 'value' => [ 'shape' => 'TemplateParameterConfiguration', ], 'max' => 20, ], 'TemplateParameterDataType' => [ 'type' => 'string', 'enum' => [ 'NUMBER', 'STRING', ], ], 'TemplateParameterInputMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'TemplateParameterName', ], 'value' => [ 'shape' => 'String1024', ], 'max' => 20, ], 'TemplateParameterName' => [ 'type' => 'string', 'max' => 512, 'min' => 1, 'pattern' => '[\\.\\-_\\#A-Za-z0-9]+', ], 'Token' => [ 'type' => 'string', 'min' => 1, 'pattern' => '^.*\\S.*$', 'sensitive' => true, ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tagKeys', ], 'members' => [ 'resourceArn' => [ 'shape' => 'RsiArn', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tagKeys' => [ 'shape' => 'TagKeyList', 'location' => 'querystring', 'locationName' => 'tagKeys', ], ], ], 'UntagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'UriString' => [ 'type' => 'string', 'max' => 10280, 'min' => 1, 'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDBFF-\\uDC00\\uDFFF\\r\\n\\t]*', ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String1024', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'VirtualCluster' => [ 'type' => 'structure', 'members' => [ 'id' => [ 'shape' => 'ResourceIdString', ], 'name' => [ 'shape' => 'ResourceNameString', ], 'arn' => [ 'shape' => 'VirtualClusterArn', ], 'state' => [ 'shape' => 'VirtualClusterState', ], 'containerProvider' => [ 'shape' => 'ContainerProvider', ], 'createdAt' => [ 'shape' => 'Date', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'VirtualClusterArn' => [ 'type' => 'string', 'max' => 1024, 'min' => 60, 'pattern' => '^arn:(aws[a-zA-Z0-9-]*):emr-containers:.+:(\\d{12}):\\/virtualclusters\\/[0-9a-zA-Z]+$', ], 'VirtualClusterState' => [ 'type' => 'string', 'enum' => [ 'RUNNING', 'TERMINATING', 'TERMINATED', 'ARRESTED', ], ], 'VirtualClusterStates' => [ 'type' => 'list', 'member' => [ 'shape' => 'VirtualClusterState', ], 'max' => 10, ], 'VirtualClusters' => [ 'type' => 'list', 'member' => [ 'shape' => 'VirtualCluster', ], ], ],];
