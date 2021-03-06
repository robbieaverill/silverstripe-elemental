<?php

/**
 * @package elemental
 * @subpackage tests
 */
class ElementPageExtensionTests extends FunctionalTest {

    protected static $fixture_file = 'elemental/tests/fixtures.yml';

    public function setUp() {
        parent::setUp();

        Page::add_extension('ElementPageExtension');
    }

    public function testUpdateCmsFields() {
        $page = $this->objFromFixture('Page', 'elementaldemo');

        $elementarea = $page->getCMSFields()->dataFieldByName('ElementArea');
        $this->assertNotNull($elementarea);


        $elementarea = $page->getCMSFields()->dataFieldByName('Content');
        $this->assertNull($content);

        $redirect = $this->objFromFixture('Page', 'elementredirectpage');
        $elementarea = $page->getCMSFields()->dataFieldByName('ElementArea');
        $this->assertNull($elementarea);
    }

    public function testDuplicatePageCopiesContent() {

    }

    public function testPublishingPagePublishesElement() {

    }

    public function testElementalArea() {

    }
}
