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

	class AboutPage extends Page {

		private static $db = [
			'F1Header' => 'Text',
			'F2Desc' => 'HTMLText',

			'VisionText' => 'Text',
			'VisionDesc' => 'Text',
			'MissionText' => 'Text',
			'MissionDesc' => 'Text',

		];

		private static $has_one = [
			'VisionIcon' => Image::class,
			'VisionImage' => Image::class,
			'MissionIcon' => Image::class,
			'MissionImage' => Image::class,
		];

		private static $owns = [
			'VisionIcon',	
			'VisionImage',	
			'MissionImage',	
			'MissionIcon',	
	    ];

		private static $allowed_children = "none";

		private static $defaults = array(
			'PageName' => 'About Page',
			'MenuTitle' => 'About',
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
			$fields->addFieldsToTab('Root.Frame1.Main', array(
				new TextareaField('F1Header', 'Header'),
			));

			 /*
			|-----------------------------------------------
			| @Frame2
			|----------------------------------------------- */
			$fields->addFieldsToTab('Root.Frame2.Main', array(
				new HTMLEditorField('F2Desc', 'Description'),
			));

			/*
			|-----------------------------------------------
			| @Frame3
			|----------------------------------------------- */
			$fields->addFieldsToTab('Root.Frame3.Vision', array(
				$icon = UploadField::create('VisionIcon','Vision Icon'),
				new TextField('VisionText', 'Title'),
				new TextareaField('VisionDesc', 'Description'),
				$upload = UploadField::create('VisionImage','Vision Image'),
			));

			$upload->setDescription('Max file size: 2MB | Dimension: 700px x 700px');
			$upload->setFolderName('aboutpage');
			$icon->setDescription('Max file size: 2MB | 100px x 100px');
			$icon->setFolderName('aboutpage');

			$fields->addFieldsToTab('Root.Frame3.Mission', array(
				$icon = UploadField::create('MissionIcon','Mission Icon'),
				new TextField('MissionText', 'Title'),
				new TextareaField('MissionDesc', 'Description'),
				$upload = UploadField::create('MissionImage','Mission Image'),
			));

			$upload->setDescription('Max file size: 2MB | Dimension: 700px x 700px');
			$upload->setFolderName('aboutpage');
			$icon->setDescription('Max file size: 2MB | 100px x 100px');
			$icon->setFolderName('aboutpage');


			# SET FIELD DESCRIPTION 
			// $uploadf->setDescription('Max file size: 2MB | Dimension: 1366px x 768px');
			
			# Set destination path for the uploaded images.
			// $uploadf->setFolderName('homepage/frame-1');

			return $fields;
		}
	}

	class AboutPageController extends PageController {
		
	}
}
