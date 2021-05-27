<?php

namespace Zazama\OnePage;

use Page;

class OnePage extends Page {

    private static $allowed_children = [BaseChildPage::class];

    public function getCMSFields() {
        $fields = parent::getCMSFields();
        $fields->removeByName('Content');
        return $fields;
    }
}