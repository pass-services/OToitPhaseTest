<?php

include_once dirname(__FILE__) . '/' . 'commit_edited_values_grid_state.php';

class CommitMultiEditGridState extends CommitEditedValuesGridState {

    protected function handleError($message, $displayTime = 0)
    {
        $this->ChangeState(OPERATION_MULTI_EDIT);
        parent::handleError($message, $displayTime);
    }

    protected function getNewRowValues($rowValues)
    {
        return array_merge(
            $rowValues,
            $this->getDataset()->GetCurrentFieldValues()
        );
    }

    protected function getRealEditColumns()
    {
        return $this->grid->GetMultiEditColumns();
    }

    public function ProcessMessages()
    {
        $primaryKeyValuesSet = ArrayWrapper::createPostWrapper()->getValue('keys', array());
        $this->getDataset()->applyFilterBasedOnPrimaryKeyValuesSet($primaryKeyValuesSet);

        $this->getDataset()->Open();
        while ($this->getDataset()->Next()) {
            $this->CheckRLSEditGrant();
            $rowValues = $this->getDataset()->GetCurrentFieldValues();
            $this->getDataset()->Edit();
            $this->doProcessMessages($rowValues);
        }
    }

}

