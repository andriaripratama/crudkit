<?php

namespace CrudKit\Form;

class DateTimeFormItem extends HorizontalItem{

    public function renderInternal()
    {
    	$directives = $this->getAngularDirectives ();

        return <<<COMP
        <div class="input-group">
        <input type="date" class="form-control" $directives/>
        </div>
COMP;
    }
}