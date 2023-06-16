<?php
// namespace Concrete\Package\YourPackageName\Block\YourBlockHandle;
namespace Application\Block\THREEJS;

use Concrete\Core\Block\BlockController;

class Controller extends BlockController
{
    protected $btTable = 'btThreeJs';
    protected $btInterfaceWidth = 800;
    protected $btInterfaceHeight = 600;
    
    // Add any additional properties, functions, or overrides as needed
    public function getBlockTypeName()
    {
        return t('Three Js');
    }

    public function getBlockTypeDescription()
    {
        return t('Add Threejs basic cube scene in a simple div.');
    }
}
