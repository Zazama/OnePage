<?php

namespace Zazama\OnePage;

use PageController;
use SilverStripe\ORM\ArrayList;
use SilverStripe\View\ArrayData;
use SilverStripe\CMS\Model\SiteTree;

class OnePageController extends PageController {
    public function init() {
        parent::init();
    }

    public function getChildrenLayouts() {
        $layouts = new ArrayList();
        foreach($this->AllChildren() as $child) {
            if(!$child->HideFromOnePage) {
                $layouts->add(new ArrayData([
                    'Layout' => $child->renderWith(['type' => 'Layout', $child->Classname]),
                    'Self' => $child
                ]));
            }
        }
        return $layouts;
    }
}