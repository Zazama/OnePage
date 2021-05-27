<?php

namespace Zazama\OnePage;

use Page;

class BaseChildPage extends Page {
    private static $can_be_root = false;
    private static $allowed_children = [];
    private static $hide_ancestor = BaseChildPage::class;

    public function Link($action = null) {
        if($this->ParentID) {
            return $this->Parent()->Link() . '#' . $this->LinkWithoutHash($action);
        } else {
            return '#' . $this->LinkWithoutHash($action);
        }
    }

    public function PreviewLink($action = null) {
        return '/' . $this->RelativeLink();
    }

    public function LinkWithoutHash($action = null) {
        return $this->getLiveURLSegment() . '-' . $this->ID;
    }
}
