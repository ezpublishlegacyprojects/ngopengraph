<?php

class ngOpenGraphImage extends ngOpenGraphBase
{
	function __construct( eZContentObjectAttribute $attribute )
	{
		parent::__construct( $attribute );
	}

	public function getData()
	{
		$imageAliasHandler = $this->ContentObjectAttribute->attribute( 'content' );
		$imageAlias = $imageAliasHandler->imageAlias('opengraph');

		if($imageAlias['is_valid'] == 1)
			return 'http://' . $_SERVER['HTTP_HOST'] . '/' . $imageAlias['full_path'];
		return 'http://' . $_SERVER['HTTP_HOST'] . '/extension/ngopengraph/design/standard/images/opengraph_default_image.png';
	}
}

?>