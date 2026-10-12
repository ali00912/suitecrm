<?php 
 $GLOBALS["dictionary"]["ManualMigrationTask"]=array (
  'table' => 'manual_migration_tasks',
  'comment' => 'ManualMigrationTasks',
  'audited' => false,
  'inline_edit' => false,
  'massupdate' => false,
  'exportable' => false,
  'importable' => false,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'comment' => 'Unique identifier',
      'display' => 'readonly',
      'reportable' => false,
      'massupdate' => false,
      'inline_edit' => false,
      'importable' => false,
      'exportable' => false,
      'unified_search' => false,
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'link' => true,
      'dbType' => 'varchar',
      'len' => 255,
      'required' => true,
      'display' => 'readonly',
      'duplicate_merge' => 'disabled',
      'reportable' => false,
      'massupdate' => false,
      'inline_edit' => false,
      'importable' => false,
      'exportable' => false,
      'unified_search' => false,
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'user_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'user_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => 6,
      'cols' => 80,
      'display' => 'readonly',
      'duplicate_merge' => 'disabled',
      'reportable' => false,
      'massupdate' => false,
      'inline_edit' => false,
      'importable' => false,
      'exportable' => false,
      'unified_search' => false,
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'manualmigrationtasks_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'manualmigrationtasks_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'SecurityGroups' => 
    array (
      'name' => 'SecurityGroups',
      'type' => 'link',
      'relationship' => 'securitygroups_manualmigrationtasks',
      'module' => 'SecurityGroups',
      'bean_name' => 'SecurityGroup',
      'source' => 'non-db',
      'vname' => 'LBL_SECURITYGROUPS',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'reportable' => true,
      'isnull' => 'false',
      'dbType' => 'id',
      'audited' => true,
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'rname' => 'user_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'manualmigrationtasks_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
    ),
    'data' => 
    array (
      'name' => 'data',
      'vname' => 'LBL_DATA',
      'type' => 'longtext',
      'comment' => 'JSON-encoded task options and handler data',
      'display' => 'none',
      'duplicate_merge' => 'disabled',
      'reportable' => false,
      'massupdate' => false,
      'inline_edit' => false,
      'importable' => false,
      'exportable' => false,
      'unified_search' => false,
    ),
    'progress' => 
    array (
      'name' => 'progress',
      'vname' => 'LBL_PROGRESS',
      'type' => 'composite',
      'dbType' => 'text',
      'layout' => 
      array (
        0 => 'percent',
      ),
      'attributeFields' => 
      array (
        'percent' => 
        array (
          'name' => 'percent',
          'type' => 'texttemplate',
          'metadata' => 
          array (
            'templateLabelKey' => 'LBL_PROGRESS_PERCENT_TPL',
            'conditionalTemplates' => 
            array (
              0 => 
              array (
                'templateLabelKey' => 'LBL_PROGRESS_NOT_STARTED',
                'displayModes' => 
                array (
                  0 => 'detail',
                  1 => 'list',
                ),
                'fieldName' => 'status',
                'activeOn' => 
                array (
                  0 => 
                  array (
                    'operator' => 'is-equal',
                    'values' => 
                    array (
                      0 => 'initial',
                      1 => 'pending',
                    ),
                  ),
                ),
              ),
              1 => 
              array (
                'templateLabelKey' => 'LBL_PROGRESS_QUEUING_TPL',
                'displayModes' => 
                array (
                  0 => 'detail',
                  1 => 'list',
                ),
                'fieldName' => 'phase',
                'activeOn' => 
                array (
                  0 => 
                  array (
                    'operator' => 'is-equal',
                    'values' => 
                    array (
                      0 => 'queueing',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'completed' => 
        array (
          'name' => 'completed',
          'type' => 'int',
        ),
        'failed' => 
        array (
          'name' => 'failed',
          'type' => 'int',
        ),
        'total' => 
        array (
          'name' => 'total',
          'type' => 'int',
        ),
        'queued' => 
        array (
          'name' => 'queued',
          'type' => 'int',
        ),
      ),
      'display' => 'readonly',
      'direction' => 'inline',
      'duplicate_merge' => 'disabled',
      'reportable' => false,
      'massupdate' => false,
      'inline_edit' => false,
      'importable' => false,
      'exportable' => false,
      'unified_search' => false,
    ),
    'estimated_run_time' => 
    array (
      'name' => 'estimated_run_time',
      'vname' => 'LBL_ESTIMATED_RUN_TIME',
      'type' => 'varchar',
      'len' => 255,
      'source' => 'non-db',
      'required' => false,
      'display' => 'readonly',
      'duplicate_merge' => 'disabled',
      'reportable' => false,
      'massupdate' => false,
      'inline_edit' => false,
      'importable' => false,
      'exportable' => false,
      'unified_search' => false,
    ),
    'phase' => 
    array (
      'name' => 'phase',
      'vname' => 'LBL_PHASE',
      'type' => 'enum',
      'options' => 'dom_async_task_phases',
      'len' => 50,
      'display' => 'readonly',
      'inline_edit' => false,
      'reportable' => false,
      'massupdate' => false,
      'importable' => false,
      'exportable' => false,
      'unified_search' => false,
    ),
    'service_key' => 
    array (
      'name' => 'service_key',
      'vname' => 'LBL_SERVICE_KEY',
      'type' => 'varchar',
      'len' => 255,
      'required' => false,
      'display' => 'readonly',
      'duplicate_merge' => 'disabled',
      'reportable' => false,
      'massupdate' => false,
      'inline_edit' => false,
      'importable' => false,
      'exportable' => false,
      'unified_search' => false,
    ),
    'last_run_datetime' => 
    array (
      'name' => 'last_run_datetime',
      'vname' => 'LBL_LAST_RUN_DATETIME',
      'type' => 'datetime',
      'required' => false,
      'display' => 'readonly',
      'duplicate_merge' => 'disabled',
      'inline_edit' => false,
      'reportable' => false,
      'massupdate' => false,
      'importable' => false,
      'exportable' => false,
      'unified_search' => false,
    ),
    'attachments' => 
    array (
      'name' => 'attachments',
      'vname' => 'LBL_ATTACHMENTS',
      'type' => 'attachment',
      'source' => 'non-db',
      'display' => 'readonly',
      'inline_edit' => false,
      'reportable' => false,
      'massupdate' => false,
      'importable' => false,
      'exportable' => false,
      'unified_search' => false,
      'metadata' => 
      array (
        'storage_type' => 'private-documents',
      ),
    ),
    'allow_failure_retry_action' => 
    array (
      'name' => 'allow_failure_retry_action',
      'vname' => 'LBL_ALLOW_FAILURE_RETRY_ACTION',
      'type' => 'bool',
      'default' => false,
      'display' => 'none',
      'inline_edit' => false,
      'reportable' => false,
      'massupdate' => false,
      'importable' => false,
      'exportable' => false,
      'unified_search' => false,
    ),
    'allow_failure_rerun_action' => 
    array (
      'name' => 'allow_failure_rerun_action',
      'vname' => 'LBL_ALLOW_FAILURE_RERUN_ACTION',
      'type' => 'bool',
      'default' => false,
      'display' => 'none',
      'inline_edit' => false,
      'reportable' => false,
      'massupdate' => false,
      'importable' => false,
      'exportable' => false,
      'unified_search' => false,
    ),
    'type' => 
    array (
      'name' => 'type',
      'vname' => 'LBL_TYPE',
      'type' => 'enum',
      'options' => 'dom_manual_migration_tasks_types',
      'display' => 'readonly',
      'inline_edit' => false,
      'reportable' => false,
      'massupdate' => false,
      'importable' => false,
      'exportable' => false,
      'unified_search' => false,
      'footnotes' => 
      array (
        0 => 
        array (
          'labelKey' => 'LBL_TYPE_BACKGROUND_HELP',
          'displayModes' => 
          array (
            0 => 'detail',
          ),
          'activeOn' => 
          array (
            0 => 
            array (
              'operator' => 'is-equal',
              'values' => 
              array (
                0 => 'background',
              ),
            ),
          ),
        ),
        1 => 
        array (
          'labelKey' => 'LBL_TYPE_IMMEDIATE_HELP',
          'displayModes' => 
          array (
            0 => 'detail',
          ),
          'activeOn' => 
          array (
            0 => 
            array (
              'operator' => 'is-equal',
              'values' => 
              array (
                0 => 'immediate',
              ),
            ),
          ),
        ),
      ),
    ),
    'status' => 
    array (
      'name' => 'status',
      'vname' => 'LBL_STATUS',
      'type' => 'enum',
      'options' => 'dom_manual_migration_tasks_statuses',
      'display' => 'readonly',
      'inline_edit' => false,
      'reportable' => false,
      'massupdate' => false,
      'importable' => false,
      'exportable' => false,
      'unified_search' => false,
    ),
  ),
  'relationships' => 
  array (
    'manualmigrationtasks_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ManualMigrationTasks',
      'rhs_table' => 'manual_migration_tasks',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'manualmigrationtasks_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ManualMigrationTasks',
      'rhs_table' => 'manual_migration_tasks',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'securitygroups_manualmigrationtasks' => 
    array (
      'lhs_module' => 'SecurityGroups',
      'lhs_table' => 'securitygroups',
      'lhs_key' => 'id',
      'rhs_module' => 'ManualMigrationTasks',
      'rhs_table' => 'manual_migration_tasks',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'securitygroups_records',
      'join_key_lhs' => 'securitygroup_id',
      'join_key_rhs' => 'record_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'ManualMigrationTasks',
    ),
    'manualmigrationtasks_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ManualMigrationTasks',
      'rhs_table' => 'manual_migration_tasks',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'manualmigrationtaskspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'templates' => 
  array (
    'asynctask' => 'asynctask',
    'assignable' => 'assignable',
    'security_groups' => 'security_groups',
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);