<?php
namespace CrudKit\Form;


abstract class HorizontalItem extends BaseFormItem{
    public function render () {
        $label = $this->config['label'];
        $content = $this->renderInternal();
        return  <<<RENDER
        <div class="form-group" ng-class="extraClasses.{$this->key}">
                <label for="{$this->id}">$label</label>
                <div>
                $content
                </div>
            </div>
RENDER;

    }

    public function getAngularDirectives () {
        $ngModel = $this->form->getNgModel();
        return "ng-change=\"{$this->changeFunc}('{$this->key}')\" ng-model=\"$ngModel.{$this->key}\"";
    }

    public function renderInline () {
        return $this->render();
    }

    public abstract function renderInternal ();
}