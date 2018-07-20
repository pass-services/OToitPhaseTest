<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *                                   ATTENTION!
 * If you see this message in your browser (Internet Explorer, Mozilla Firefox, Google Chrome, etc.)
 * this means that PHP is not properly installed on your web server. Please refer to the PHP manual
 * for more details: http://php.net/manual/install.php 
 *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 */

    include_once dirname(__FILE__) . '/components/startup.php';
    include_once dirname(__FILE__) . '/components/application.php';


    include_once dirname(__FILE__) . '/' . 'database_engine/mysql_engine.php';
    include_once dirname(__FILE__) . '/' . 'components/page/page.php';
    include_once dirname(__FILE__) . '/' . 'components/page/detail_page.php';
    include_once dirname(__FILE__) . '/' . 'components/page/nested_form_page.php';


    function GetConnectionOptions()
    {
        $result = GetGlobalConnectionOptions();
        $result['client_encoding'] = 'utf8';
        GetApplication()->GetUserAuthentication()->applyIdentityToConnectionOptions($result);
        return $result;
    }

    
    
    
    // OnBeforePageExecute event handler
    
    
    
    class oc_order01Page extends Page
    {
        protected function DoBeforeCreate()
        {
            $this->dataset = new TableDataset(
                MySqlIConnectionFactory::getInstance(),
                GetConnectionOptions(),
                '`oc_order`');
            $field = new IntegerField('order_id', null, null, true);
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, true);
            $field = new IntegerField('invoice_no');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('invoice_prefix');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new IntegerField('store_id');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('store_name');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('store_url');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new IntegerField('customer_id');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new IntegerField('customer_group_id');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('firstname');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('lastname');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('email');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('telephone');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('fax');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('custom_field');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('payment_firstname');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('payment_lastname');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('payment_company');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('payment_address_1');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('payment_address_2');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('payment_city');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('payment_postcode');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('payment_country');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new IntegerField('payment_country_id');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('payment_zone');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new IntegerField('payment_zone_id');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('payment_address_format');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('payment_custom_field');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('payment_method');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('payment_code');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('shipping_firstname');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('shipping_lastname');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('shipping_company');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('shipping_address_1');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('shipping_address_2');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('shipping_city');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('shipping_postcode');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('shipping_country');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new IntegerField('shipping_country_id');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('shipping_zone');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new IntegerField('shipping_zone_id');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('shipping_address_format');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('shipping_custom_field');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('shipping_method');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('shipping_code');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('comment');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new IntegerField('total');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new IntegerField('order_status_id');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new IntegerField('affiliate_id');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new IntegerField('commission');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new IntegerField('marketing_id');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('tracking');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new IntegerField('language_id');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new IntegerField('currency_id');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('currency_code');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new IntegerField('currency_value');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('ip');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('forwarded_ip');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('user_agent');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new StringField('accept_language');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new DateTimeField('date_added');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $field = new DateTimeField('date_modified');
            $field->SetIsNotNull(true);
            $this->dataset->AddField($field, false);
            $this->dataset->AddCustomCondition(EnvVariablesUtils::EvaluateVariableTemplate($this->GetColumnVariableContainer(), 'order_status_id = 5'));
        }
    
        protected function DoPrepare() {
    
        }
    
        protected function CreatePageNavigator()
        {
            $result = new CompositePageNavigator($this);
            
            $partitionNavigator = new PageNavigator('pnav', $this, $this->dataset);
            $partitionNavigator->SetRowsPerPage(20);
            $result->AddPageNavigator($partitionNavigator);
            
            return $result;
        }
    
        protected function CreateRssGenerator()
        {
            return null;
        }
    
        protected function setupCharts()
        {
    
        }
    
        protected function getFiltersColumns()
        {
            return array(
                new FilterColumn($this->dataset, 'order_id', 'order_id', 'Order Id'),
                new FilterColumn($this->dataset, 'invoice_no', 'invoice_no', 'Invoice No'),
                new FilterColumn($this->dataset, 'invoice_prefix', 'invoice_prefix', 'Invoice Prefix'),
                new FilterColumn($this->dataset, 'store_id', 'store_id', 'Store Id'),
                new FilterColumn($this->dataset, 'store_name', 'store_name', 'Store Name'),
                new FilterColumn($this->dataset, 'store_url', 'store_url', 'Store Url'),
                new FilterColumn($this->dataset, 'customer_id', 'customer_id', 'Customer Id'),
                new FilterColumn($this->dataset, 'customer_group_id', 'customer_group_id', 'Customer Group Id'),
                new FilterColumn($this->dataset, 'firstname', 'firstname', 'Firstname'),
                new FilterColumn($this->dataset, 'lastname', 'lastname', 'Lastname'),
                new FilterColumn($this->dataset, 'email', 'email', 'Email'),
                new FilterColumn($this->dataset, 'telephone', 'telephone', 'Telephone'),
                new FilterColumn($this->dataset, 'fax', 'fax', 'Fax'),
                new FilterColumn($this->dataset, 'custom_field', 'custom_field', 'Custom Field'),
                new FilterColumn($this->dataset, 'payment_firstname', 'payment_firstname', 'Payment Firstname'),
                new FilterColumn($this->dataset, 'payment_lastname', 'payment_lastname', 'Payment Lastname'),
                new FilterColumn($this->dataset, 'payment_company', 'payment_company', 'Payment Company'),
                new FilterColumn($this->dataset, 'payment_address_1', 'payment_address_1', 'Payment Address 1'),
                new FilterColumn($this->dataset, 'payment_address_2', 'payment_address_2', 'Payment Address 2'),
                new FilterColumn($this->dataset, 'payment_city', 'payment_city', 'Payment City'),
                new FilterColumn($this->dataset, 'payment_postcode', 'payment_postcode', 'Payment Postcode'),
                new FilterColumn($this->dataset, 'payment_country', 'payment_country', 'Payment Country'),
                new FilterColumn($this->dataset, 'payment_country_id', 'payment_country_id', 'Payment Country Id'),
                new FilterColumn($this->dataset, 'payment_zone', 'payment_zone', 'Payment Zone'),
                new FilterColumn($this->dataset, 'payment_zone_id', 'payment_zone_id', 'Payment Zone Id'),
                new FilterColumn($this->dataset, 'payment_address_format', 'payment_address_format', 'Payment Address Format'),
                new FilterColumn($this->dataset, 'payment_custom_field', 'payment_custom_field', 'Payment Custom Field'),
                new FilterColumn($this->dataset, 'payment_method', 'payment_method', 'Payment Method'),
                new FilterColumn($this->dataset, 'payment_code', 'payment_code', 'Payment Code'),
                new FilterColumn($this->dataset, 'shipping_firstname', 'shipping_firstname', 'Shipping Firstname'),
                new FilterColumn($this->dataset, 'shipping_lastname', 'shipping_lastname', 'Shipping Lastname'),
                new FilterColumn($this->dataset, 'shipping_company', 'shipping_company', 'Shipping Company'),
                new FilterColumn($this->dataset, 'shipping_address_1', 'shipping_address_1', 'Shipping Address 1'),
                new FilterColumn($this->dataset, 'shipping_address_2', 'shipping_address_2', 'Shipping Address 2'),
                new FilterColumn($this->dataset, 'shipping_city', 'shipping_city', 'Shipping City'),
                new FilterColumn($this->dataset, 'shipping_postcode', 'shipping_postcode', 'Shipping Postcode'),
                new FilterColumn($this->dataset, 'shipping_country', 'shipping_country', 'Shipping Country'),
                new FilterColumn($this->dataset, 'shipping_country_id', 'shipping_country_id', 'Shipping Country Id'),
                new FilterColumn($this->dataset, 'shipping_zone', 'shipping_zone', 'Shipping Zone'),
                new FilterColumn($this->dataset, 'shipping_zone_id', 'shipping_zone_id', 'Shipping Zone Id'),
                new FilterColumn($this->dataset, 'shipping_address_format', 'shipping_address_format', 'Shipping Address Format'),
                new FilterColumn($this->dataset, 'shipping_custom_field', 'shipping_custom_field', 'Shipping Custom Field'),
                new FilterColumn($this->dataset, 'shipping_method', 'shipping_method', 'Shipping Method'),
                new FilterColumn($this->dataset, 'shipping_code', 'shipping_code', 'Shipping Code'),
                new FilterColumn($this->dataset, 'comment', 'comment', 'Comment'),
                new FilterColumn($this->dataset, 'total', 'total', 'Total'),
                new FilterColumn($this->dataset, 'order_status_id', 'order_status_id', 'Status'),
                new FilterColumn($this->dataset, 'affiliate_id', 'affiliate_id', 'Affiliate Id'),
                new FilterColumn($this->dataset, 'commission', 'commission', 'Commission'),
                new FilterColumn($this->dataset, 'marketing_id', 'marketing_id', 'Marketing Id'),
                new FilterColumn($this->dataset, 'tracking', 'tracking', 'Tracking'),
                new FilterColumn($this->dataset, 'language_id', 'language_id', 'Language Id'),
                new FilterColumn($this->dataset, 'currency_id', 'currency_id', 'Currency Id'),
                new FilterColumn($this->dataset, 'currency_code', 'currency_code', 'Currency Code'),
                new FilterColumn($this->dataset, 'currency_value', 'currency_value', 'Currency Value'),
                new FilterColumn($this->dataset, 'ip', 'ip', 'Ip'),
                new FilterColumn($this->dataset, 'forwarded_ip', 'forwarded_ip', 'Forwarded Ip'),
                new FilterColumn($this->dataset, 'user_agent', 'user_agent', 'User Agent'),
                new FilterColumn($this->dataset, 'accept_language', 'accept_language', 'Accept Language'),
                new FilterColumn($this->dataset, 'date_added', 'date_added', 'Date Added'),
                new FilterColumn($this->dataset, 'date_modified', 'date_modified', 'Date Modified')
            );
        }
    
        protected function setupQuickFilter(QuickFilter $quickFilter, FixedKeysArray $columns)
        {
            $quickFilter
                ->addColumn($columns['order_id'])
                ->addColumn($columns['firstname'])
                ->addColumn($columns['lastname'])
                ->addColumn($columns['date_added']);
        }
    
        protected function setupColumnFilter(ColumnFilter $columnFilter)
        {
            $columnFilter
                ->setOptionsFor('order_status_id')
                ->setOptionsFor('date_added');
        }
    
        protected function setupFilterBuilder(FilterBuilder $filterBuilder, FixedKeysArray $columns)
        {
            $main_editor = new TextEdit('order_id_edit');
            
            $filterBuilder->addColumn(
                $columns['order_id'],
                array(
                    FilterConditionOperator::EQUALS => $main_editor,
                    FilterConditionOperator::DOES_NOT_EQUAL => $main_editor,
                    FilterConditionOperator::IS_GREATER_THAN => $main_editor,
                    FilterConditionOperator::IS_GREATER_THAN_OR_EQUAL_TO => $main_editor,
                    FilterConditionOperator::IS_LESS_THAN => $main_editor,
                    FilterConditionOperator::IS_LESS_THAN_OR_EQUAL_TO => $main_editor,
                    FilterConditionOperator::IS_BETWEEN => $main_editor,
                    FilterConditionOperator::IS_NOT_BETWEEN => $main_editor,
                    FilterConditionOperator::IS_BLANK => null,
                    FilterConditionOperator::IS_NOT_BLANK => null
                )
            );
        }
    
        protected function AddOperationsColumns(Grid $grid)
        {
            $actions = $grid->getActions();
            $actions->setCaption($this->GetLocalizerCaptions()->GetMessageString('Actions'));
            $actions->setPosition(ActionList::POSITION_LEFT);
            
            if ($this->GetSecurityInfo()->HasViewGrant())
            {
                $operation = new LinkOperation($this->GetLocalizerCaptions()->GetMessageString('View'), OPERATION_VIEW, $this->dataset, $grid);
                $operation->setUseImage(true);
                $actions->addOperation($operation);
            }
            
            if ($this->GetSecurityInfo()->HasEditGrant())
            {
                $operation = new LinkOperation($this->GetLocalizerCaptions()->GetMessageString('Edit'), OPERATION_EDIT, $this->dataset, $grid);
                $operation->setUseImage(true);
                $actions->addOperation($operation);
                $operation->OnShow->AddListener('ShowEditButtonHandler', $this);
            }
            
            if ($this->GetSecurityInfo()->HasDeleteGrant())
            {
                $operation = new LinkOperation($this->GetLocalizerCaptions()->GetMessageString('Delete'), OPERATION_DELETE, $this->dataset, $grid);
                $operation->setUseImage(true);
                $actions->addOperation($operation);
                $operation->OnShow->AddListener('ShowDeleteButtonHandler', $this);
                $operation->SetAdditionalAttribute('data-modal-operation', 'delete');
                $operation->SetAdditionalAttribute('data-delete-handler-name', $this->GetModalGridDeleteHandler());
            }
            
            if ($this->GetSecurityInfo()->HasAddGrant())
            {
                $operation = new LinkOperation($this->GetLocalizerCaptions()->GetMessageString('Copy'), OPERATION_COPY, $this->dataset, $grid);
                $operation->setUseImage(true);
                $actions->addOperation($operation);
            }
        }
    
        protected function AddFieldColumns(Grid $grid, $withDetails = true)
        {
            //
            // View column for order_id field
            //
            $column = new NumberViewColumn('order_id', 'order_id', 'Order Id', $this->dataset);
            $column->SetOrderable(true);
            $column->setNumberAfterDecimal(0);
            $column->setThousandsSeparator(',');
            $column->setDecimalSeparator('');
            $column->setMinimalVisibility(ColumnVisibility::PHONE);
            $column->SetDescription('');
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for firstname field
            //
            $column = new TextViewColumn('firstname', 'firstname', 'Firstname', $this->dataset);
            $column->SetOrderable(true);
            $column->setMinimalVisibility(ColumnVisibility::PHONE);
            $column->SetDescription('');
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for lastname field
            //
            $column = new TextViewColumn('lastname', 'lastname', 'Lastname', $this->dataset);
            $column->SetOrderable(true);
            $column->setMinimalVisibility(ColumnVisibility::PHONE);
            $column->SetDescription('');
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for telephone field
            //
            $column = new TextViewColumn('telephone', 'telephone', 'Telephone', $this->dataset);
            $column->SetOrderable(true);
            $column->setMinimalVisibility(ColumnVisibility::PHONE);
            $column->SetDescription('');
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for order_status_id field
            //
            $column = new NumberViewColumn('order_status_id', 'order_status_id', 'Status', $this->dataset);
            $column->SetOrderable(true);
            $column->setNumberAfterDecimal(2);
            $column->setThousandsSeparator(',');
            $column->setDecimalSeparator('.');
            $column->setMinimalVisibility(ColumnVisibility::PHONE);
            $column->SetDescription('');
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
            
            //
            // View column for date_added field
            //
            $column = new DateTimeViewColumn('date_added', 'date_added', 'Date Added', $this->dataset);
            $column->SetDateTimeFormat('Y-m-d H:i:s');
            $column->SetOrderable(true);
            $column->setMinimalVisibility(ColumnVisibility::PHONE);
            $column->SetDescription('');
            $column->SetFixedWidth(null);
            $grid->AddViewColumn($column);
        }
    
        protected function AddSingleRecordViewColumns(Grid $grid)
        {
            //
            // View column for order_id field
            //
            $column = new NumberViewColumn('order_id', 'order_id', 'Order Id', $this->dataset);
            $column->SetOrderable(true);
            $column->setNumberAfterDecimal(0);
            $column->setThousandsSeparator(',');
            $column->setDecimalSeparator('');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for firstname field
            //
            $column = new TextViewColumn('firstname', 'firstname', 'Firstname', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for lastname field
            //
            $column = new TextViewColumn('lastname', 'lastname', 'Lastname', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for telephone field
            //
            $column = new TextViewColumn('telephone', 'telephone', 'Telephone', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for order_status_id field
            //
            $column = new NumberViewColumn('order_status_id', 'order_status_id', 'Status', $this->dataset);
            $column->SetOrderable(true);
            $column->setNumberAfterDecimal(2);
            $column->setThousandsSeparator(',');
            $column->setDecimalSeparator('.');
            $grid->AddSingleRecordViewColumn($column);
            
            //
            // View column for date_added field
            //
            $column = new DateTimeViewColumn('date_added', 'date_added', 'Date Added', $this->dataset);
            $column->SetDateTimeFormat('Y-m-d H:i:s');
            $column->SetOrderable(true);
            $grid->AddSingleRecordViewColumn($column);
        }
    
        protected function AddEditColumns(Grid $grid)
        {
            //
            // Edit column for order_id field
            //
            $editor = new TextEdit('order_id_edit');
            $editColumn = new CustomEditColumn('Order Id', 'order_id', $editor, $this->dataset);
            $editColumn->SetReadOnly(true);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $editColumn->GetCaption()));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $editColumn->setAllowListCellEdit(false);
            $editColumn->setAllowSingleViewCellEdit(false);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for firstname field
            //
            $editor = new TextEdit('firstname_edit');
            $editor->SetMaxLength(32);
            $editColumn = new CustomEditColumn('Firstname', 'firstname', $editor, $this->dataset);
            $editColumn->SetReadOnly(true);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $editColumn->GetCaption()));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $editColumn->setAllowListCellEdit(false);
            $editColumn->setAllowSingleViewCellEdit(false);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for lastname field
            //
            $editor = new TextEdit('lastname_edit');
            $editor->SetMaxLength(32);
            $editColumn = new CustomEditColumn('Lastname', 'lastname', $editor, $this->dataset);
            $editColumn->SetReadOnly(true);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $editColumn->GetCaption()));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $editColumn->setAllowListCellEdit(false);
            $editColumn->setAllowSingleViewCellEdit(false);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
            
            //
            // Edit column for order_status_id field
            //
            $editor = new ComboBox('order_status_id_edit', $this->GetLocalizerCaptions()->GetMessageString('PleaseSelect'));
            $editor->addChoice('5', 'Complète');
            $editor->addChoice('3', 'Expédié');
            $editColumn = new CustomEditColumn('Status', 'order_status_id', $editor, $this->dataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $editColumn->GetCaption()));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $editColumn->setAllowListCellEdit(false);
            $editColumn->setAllowSingleViewCellEdit(false);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddEditColumn($editColumn);
        }
    
        protected function AddMultiEditColumns(Grid $grid)
        {
            //
            // Edit column for order_status_id field
            //
            $editor = new ComboBox('order_status_id_edit', $this->GetLocalizerCaptions()->GetMessageString('PleaseSelect'));
            $editor->addChoice('5', 'Complète');
            $editor->addChoice('3', 'Expédié');
            $editColumn = new CustomEditColumn('Status', 'order_status_id', $editor, $this->dataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $editColumn->GetCaption()));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddMultiEditColumn($editColumn);
        }
    
        protected function AddInsertColumns(Grid $grid)
        {
            //
            // Edit column for order_status_id field
            //
            $editor = new ComboBox('order_status_id_edit', $this->GetLocalizerCaptions()->GetMessageString('PleaseSelect'));
            $editor->addChoice('5', 'Complète');
            $editor->addChoice('3', 'Expédié');
            $editColumn = new CustomEditColumn('Status', 'order_status_id', $editor, $this->dataset);
            $validator = new RequiredValidator(StringUtils::Format($this->GetLocalizerCaptions()->GetMessageString('RequiredValidationMessage'), $editColumn->GetCaption()));
            $editor->GetValidatorCollection()->AddValidator($validator);
            $this->ApplyCommonColumnEditProperties($editColumn);
            $grid->AddInsertColumn($editColumn);
            $grid->SetShowAddButton(true && $this->GetSecurityInfo()->HasAddGrant());
        }
    
        protected function AddPrintColumns(Grid $grid)
        {
            //
            // View column for order_id field
            //
            $column = new NumberViewColumn('order_id', 'order_id', 'Order Id', $this->dataset);
            $column->SetOrderable(true);
            $column->setNumberAfterDecimal(0);
            $column->setThousandsSeparator(',');
            $column->setDecimalSeparator('');
            $grid->AddPrintColumn($column);
            
            //
            // View column for firstname field
            //
            $column = new TextViewColumn('firstname', 'firstname', 'Firstname', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for lastname field
            //
            $column = new TextViewColumn('lastname', 'lastname', 'Lastname', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
            
            //
            // View column for order_status_id field
            //
            $column = new NumberViewColumn('order_status_id', 'order_status_id', 'Status', $this->dataset);
            $column->SetOrderable(true);
            $column->setNumberAfterDecimal(2);
            $column->setThousandsSeparator(',');
            $column->setDecimalSeparator('.');
            $grid->AddPrintColumn($column);
            
            //
            // View column for date_added field
            //
            $column = new DateTimeViewColumn('date_added', 'date_added', 'Date Added', $this->dataset);
            $column->SetDateTimeFormat('Y-m-d H:i:s');
            $column->SetOrderable(true);
            $grid->AddPrintColumn($column);
        }
    
        protected function AddExportColumns(Grid $grid)
        {
            //
            // View column for order_id field
            //
            $column = new NumberViewColumn('order_id', 'order_id', 'Order Id', $this->dataset);
            $column->SetOrderable(true);
            $column->setNumberAfterDecimal(0);
            $column->setThousandsSeparator(',');
            $column->setDecimalSeparator('');
            $grid->AddExportColumn($column);
            
            //
            // View column for firstname field
            //
            $column = new TextViewColumn('firstname', 'firstname', 'Firstname', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for lastname field
            //
            $column = new TextViewColumn('lastname', 'lastname', 'Lastname', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for telephone field
            //
            $column = new TextViewColumn('telephone', 'telephone', 'Telephone', $this->dataset);
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
            
            //
            // View column for order_status_id field
            //
            $column = new NumberViewColumn('order_status_id', 'order_status_id', 'Status', $this->dataset);
            $column->SetOrderable(true);
            $column->setNumberAfterDecimal(2);
            $column->setThousandsSeparator(',');
            $column->setDecimalSeparator('.');
            $grid->AddExportColumn($column);
            
            //
            // View column for date_added field
            //
            $column = new DateTimeViewColumn('date_added', 'date_added', 'Date Added', $this->dataset);
            $column->SetDateTimeFormat('Y-m-d H:i:s');
            $column->SetOrderable(true);
            $grid->AddExportColumn($column);
        }
    
        private function AddCompareColumns(Grid $grid)
        {
            //
            // View column for order_status_id field
            //
            $column = new NumberViewColumn('order_status_id', 'order_status_id', 'Status', $this->dataset);
            $column->SetOrderable(true);
            $column->setNumberAfterDecimal(2);
            $column->setThousandsSeparator(',');
            $column->setDecimalSeparator('.');
            $grid->AddCompareColumn($column);
        }
    
        private function AddCompareHeaderColumns(Grid $grid)
        {
    
        }
    
        public function GetPageDirection()
        {
            return null;
        }
    
        public function isFilterConditionRequired()
        {
            return false;
        }
    
        protected function ApplyCommonColumnEditProperties(CustomEditColumn $column)
        {
            $column->SetDisplaySetToNullCheckBox(false);
            $column->SetDisplaySetToDefaultCheckBox(false);
    		$column->SetVariableContainer($this->GetColumnVariableContainer());
        }
    
        function GetCustomClientScript()
        {
            return ;
        }
        
        function GetOnPageLoadedClientScript()
        {
            return ;
        }
        protected function GetEnableModalGridDelete() { return true; }
    
        protected function CreateGrid()
        {
            $result = new Grid($this, $this->dataset);
            if ($this->GetSecurityInfo()->HasDeleteGrant())
               $result->SetAllowDeleteSelected(true);
            else
               $result->SetAllowDeleteSelected(false);   
            
            ApplyCommonPageSettings($this, $result);
            
            $result->SetUseImagesForActions(true);
            $result->SetUseFixedHeader(false);
            $result->SetShowLineNumbers(false);
            $result->SetShowKeyColumnsImagesInHeader(false);
            $result->SetViewMode(ViewMode::TABLE);
            $result->setEnableRuntimeCustomization(true);
            $result->setAllowCompare(true);
            $this->AddCompareHeaderColumns($result);
            $this->AddCompareColumns($result);
            $result->setMultiEditAllowed($this->GetSecurityInfo()->HasEditGrant() && false);
            $result->setTableBordered(false);
            $result->setTableCondensed(false);
            
            $result->SetHighlightRowAtHover(false);
            $result->SetWidth('');
            $this->AddOperationsColumns($result);
            $this->AddFieldColumns($result);
            $this->AddSingleRecordViewColumns($result);
            $this->AddEditColumns($result);
            $this->AddMultiEditColumns($result);
            $this->AddInsertColumns($result);
            $this->AddPrintColumns($result);
            $this->AddExportColumns($result);
    
    
            $this->SetShowPageList(true);
            $this->SetShowTopPageNavigator(true);
            $this->SetShowBottomPageNavigator(true);
            $this->setPrintListAvailable(false);
            $this->setPrintListRecordAvailable(false);
            $this->setPrintOneRecordAvailable(false);
            $this->setAllowPrintSelectedRecords(false);
            $this->setExportListAvailable(array('pdf', 'excel', 'word', 'xml', 'csv'));
            $this->setExportSelectedRecordsAvailable(array('pdf', 'excel', 'word', 'xml', 'csv'));
            $this->setExportListRecordAvailable(array());
            $this->setExportOneRecordAvailable(array('pdf', 'excel', 'word', 'xml', 'csv'));
    
            return $result;
        }
     
        protected function setClientSideEvents(Grid $grid) {
    
        }
    
        protected function doRegisterHandlers() {
            
        }
       
        protected function doCustomRenderColumn($fieldName, $fieldData, $rowData, &$customText, &$handled)
        { 
    
        }
    
        protected function doCustomRenderPrintColumn($fieldName, $fieldData, $rowData, &$customText, &$handled)
        { 
    
        }
    
        protected function doCustomRenderExportColumn($exportType, $fieldName, $fieldData, $rowData, &$customText, &$handled)
        { 
    
        }
    
        protected function doCustomDrawRow($rowData, &$cellFontColor, &$cellFontSize, &$cellBgColor, &$cellItalicAttr, &$cellBoldAttr)
        {
    
        }
    
        protected function doExtendedCustomDrawRow($rowData, &$rowCellStyles, &$rowStyles, &$rowClasses, &$cellClasses)
        {
    
        }
    
        protected function doCustomRenderTotal($totalValue, $aggregate, $columnName, &$customText, &$handled)
        {
    
        }
    
        protected function doCustomCompareColumn($columnName, $valueA, $valueB, &$result)
        {
    
        }
    
        protected function doBeforeInsertRecord($page, &$rowData, $tableName, &$cancel, &$message, &$messageDisplayTime)
        {
    
        }
    
        protected function doBeforeUpdateRecord($page, $oldRowData, &$rowData, $tableName, &$cancel, &$message, &$messageDisplayTime)
        {
    
        }
    
        protected function doBeforeDeleteRecord($page, &$rowData, $tableName, &$cancel, &$message, &$messageDisplayTime)
        {
    
        }
    
        protected function doAfterInsertRecord($page, $rowData, $tableName, &$success, &$message, &$messageDisplayTime)
        {
    
        }
    
        protected function doAfterUpdateRecord($page, $oldRowData, $rowData, $tableName, &$success, &$message, &$messageDisplayTime)
        {
    
        }
    
        protected function doAfterDeleteRecord($page, $rowData, $tableName, &$success, &$message, &$messageDisplayTime)
        {
    
        }
    
        protected function doCustomHTMLHeader($page, &$customHtmlHeaderText)
        { 
    
        }
    
        protected function doGetCustomTemplate($type, $part, $mode, &$result, &$params)
        {
    
        }
    
        protected function doGetCustomExportOptions(Page $page, $exportType, $rowData, &$options)
        {
    
        }
    
        protected function doGetCustomUploadFileName($fieldName, $rowData, &$result, &$handled, $originalFileName, $originalFileExtension, $fileSize)
        {
    
        }
    
        protected function doPrepareChart(Chart $chart)
        {
    
        }
    
        protected function doPageLoaded()
        {
    
        }
    
        protected function doGetCustomPagePermissions(Page $page, PermissionSet &$permissions, &$handled)
        {
    
        }
    
        protected function doGetCustomRecordPermissions(Page $page, &$usingCondition, $rowData, &$allowEdit, &$allowDelete, &$mergeWithDefault, &$handled)
        {
    
        }
    
    }



    try
    {
        $Page = new oc_order01Page("oc_order01", "oc_order01.php", GetCurrentUserPermissionSetForDataSource("oc_order01"), 'UTF-8');
        $Page->SetTitle('Commandes Complète');
        $Page->SetMenuLabel('Commandes Complète');
        $Page->SetHeader(GetPagesHeader());
        $Page->SetFooter(GetPagesFooter());
        $Page->SetRecordPermission(GetCurrentUserRecordPermissionsForDataSource("oc_order01"));
        GetApplication()->SetMainPage($Page);
        GetApplication()->Run();
    }
    catch(Exception $e)
    {
        ShowErrorPage($e);
    }
	
