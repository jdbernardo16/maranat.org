<?php

namespace {
	use SilverStripe\CMS\Model\SiteTree;

	use SilverStripe\Forms\TabSet;
	use SilverStripe\Forms\Tab;
	use SilverStripe\Forms\TextField;
	use SilverStripe\Forms\TextareaField;
	use SilverStripe\Forms\CheckboxField;
	use SilverStripe\Forms\DateField;
	use SilverStripe\Forms\ReadonlyField;
	use SilverStripe\Forms\DropdownField;
	use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

	use SilverStripe\Forms\GridField\GridField;
	use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
	use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;
	use Bummzack\SortableFile\Forms\SortableUploadField;

	use SilverStripe\AssetAdmin\Forms\UploadField;
	use SilverStripe\Assets\Image;
	use SilverStripe\Assets\File;

	use SilverStripe\ORM\PaginatedList;
	use SilverStripe\ORM\DataObject;
	use SilverStripe\ORM\ArrayList;
	use SilverStripe\ORM\GroupedList;

	use SilverStripe\View\Requirements;
	use SilverStripe\View\ArrayData;

	use SilverStripe\Control\HTTPRequest;

	class News extends Page {

		private static $db = [
			'Date' => 'Date',
			'Excerpt' => 'Text',
			'Desc' => 'HTMLText',
		];

		private static $has_one = [
			'IMG' => Image::class,
		];

		private static $owns = [
			'IMG'
	    ];

		private static $allowed_children = "none";

		private static $defaults = array(
			'PageName' => 'News',
			'MenuTitle' => 'News',
			'ShowInMenus' => true,
			'ShowInSearch' => true,
		);

		public function getCMSFields() {
			$fields = parent::getCMSFields();

			#Remove by tab
			$fields->removeFieldFromTab('Root.Main', 'Content');

			/*
			|-----------------------------------------------
			| @Frame1
			|----------------------------------------------- */
			$fields->addFieldsToTab('Root.Details.Main', array(
				$upload = UploadField::create('IMG','Image'),
				new DateField('Date', 'Date'),
				new TextareaField('Excerpt', 'Excerpt'),
				new HTMLEditorField('Desc', 'Description'),
			));


			# SET FIELD DESCRIPTION 
			// $uploadf->setDescription('Max file size: 2MB | Dimension: 1366px x 768px');
			
			# Set destination path for the uploaded images.
			// $uploadf->setFolderName('homepage/frame-1');

			return $fields;
		}
	}

	class NewsController extends PageController {
		
	}
}
