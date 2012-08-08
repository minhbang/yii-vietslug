<?php
class mbVietSlug extends CWidget {
	public $model = null;
	public $source = 'name';
	public $target = 'slug';
	
	public function init(){
		if($this->model !== null){
			$this->source = get_class($this->model).'_'.$this->source;
			$this->target = get_class($this->model).'_'.$this->target;
		}
	}
	
    private function publicAssets(){	
		$script = "$('#{$this->source}').mbVietSlug({target:'#{$this->target}'});";
		$assetsPath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets';
		$assetsUrl = Yii::app()->assetManager->publish($assetsPath, false, -1, YII_DEBUG);
        Yii::app()->clientScript
            ->registerCoreScript('jquery')
			->registerScriptFile($assetsUrl.'/string.toVietSlug.js')
			->registerScriptFile($assetsUrl.'/jquery.mbVietSlug.js')
            ->registerScript($this->target, $script, CClientScript::POS_READY);
    }
    public function run(){
    	if($this->model !== null)
        	$this->publicAssets();
    }
}
?>