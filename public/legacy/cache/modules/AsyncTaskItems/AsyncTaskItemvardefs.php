<?php 
 $GLOBALS["dictionary"]["AsyncTaskItem"]=array (
  'table' => 'async_task_items',
  'comment' => 'Async Task Items - individual work units for batch async tasks',
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
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'dbType' => 'varchar',
      'len' => 255,
      'required' => false,
      'display' => 'readonly',
      'reportable' => false,
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
      'relationship' => 'asynctaskitems_created_by',
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
      'relationship' => 'asynctaskitems_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'async_task_id' => 
    array (
      'name' => 'async_task_id',
      'vname' => 'LBL_ASYNC_TASK_ID',
      'type' => 'varchar',
      'len' => 36,
      'required' => true,
      'comment' => 'FK to the parent async task record',
      'display' => 'readonly',
      'reportable' => false,
    ),
    'item_key' => 
    array (
      'name' => 'item_key',
      'vname' => 'LBL_ITEM_KEY',
      'type' => 'varchar',
      'len' => 255,
      'required' => true,
      'comment' => 'Flexible identifier: record ID, line number, filename, etc.',
      'display' => 'readonly',
      'reportable' => false,
    ),
    'item_name' => 
    array (
      'name' => 'item_name',
      'vname' => 'LBL_ITEM_NAME',
      'type' => 'varchar',
      'len' => 255,
      'required' => false,
      'comment' => 'Display name for this item (record name, filename, etc.); falls back to item_key.',
      'display' => 'readonly',
      'reportable' => false,
      'linkActions' => 
      array (
        0 => 
        array (
          'key' => 'record-link',
          'params' => 
          array (
            'moduleField' => 'item_module',
            'recordField' => 'item_key',
          ),
          'activeOnFields' => 
          array (
            'item_module' => 
            array (
              0 => 
              array (
                'operator' => 'not-empty',
              ),
            ),
          ),
        ),
      ),
    ),
    'item_module' => 
    array (
      'name' => 'item_module',
      'vname' => 'LBL_ITEM_MODULE',
      'type' => 'varchar',
      'len' => 100,
      'required' => false,
      'comment' => 'Legacy module name when item_key is a record ID; empty otherwise.',
      'display' => 'readonly',
      'reportable' => false,
    ),
    'status' => 
    array (
      'name' => 'status',
      'vname' => 'LBL_STATUS',
      'type' => 'varchar',
      'len' => 36,
      'required' => true,
      'default' => 'queued',
      'comment' => 'Item status: queued, processing, completed, failed, skipped',
      'display' => 'readonly',
      'reportable' => false,
    ),
    'error_message' => 
    array (
      'name' => 'error_message',
      'vname' => 'LBL_ERROR_MESSAGE',
      'type' => 'text',
      'required' => false,
      'comment' => 'Error details if status is failed',
      'display' => 'readonly',
      'reportable' => false,
    ),
    'data' => 
    array (
      'name' => 'data',
      'vname' => 'LBL_DATA',
      'type' => 'text',
      'required' => false,
      'comment' => 'JSON-encoded handler-specific input payload',
      'display' => 'readonly',
      'reportable' => false,
    ),
    'result_data' => 
    array (
      'name' => 'result_data',
      'vname' => 'LBL_RESULT_DATA',
      'type' => 'text',
      'required' => false,
      'comment' => 'JSON-encoded result data from processing',
      'display' => 'readonly',
      'reportable' => false,
    ),
    'sort_order' => 
    array (
      'name' => 'sort_order',
      'vname' => 'LBL_SORT_ORDER',
      'type' => 'int',
      'len' => 11,
      'required' => false,
      'default' => 0,
      'comment' => 'Ordering of items within the task',
      'display' => 'readonly',
      'reportable' => false,
    ),
    'retry_count' => 
    array (
      'name' => 'retry_count',
      'vname' => 'LBL_RETRY_COUNT',
      'type' => 'int',
      'len' => 11,
      'required' => false,
      'default' => 0,
      'comment' => 'Number of times this item has been retried after failure',
      'display' => 'readonly',
      'reportable' => false,
    ),
    'attachments' => 
    array (
      'name' => 'attachments',
      'vname' => 'LBL_ATTACHMENTS',
      'type' => 'attachment',
      'source' => 'non-db',
      'inline_edit' => false,
      'comment' => 'File attachments for this task item',
      'metadata' => 
      array (
        'storage_type' => 'private-documents',
      ),
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'asynctaskitemspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    0 => 
    array (
      'name' => 'idx_ati_async_task_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'async_task_id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_ati_async_task_status',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'async_task_id',
        1 => 'status',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_ati_item_key',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'async_task_id',
        1 => 'item_key',
      ),
    ),
  ),
  'relationships' => 
  array (
    'asynctaskitems_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'AsyncTaskItems',
      'rhs_table' => 'async_task_items',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'asynctaskitems_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'AsyncTaskItems',
      'rhs_table' => 'async_task_items',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'templates' => 
  array (
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);