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

	class HomePage extends Page {

		private static $db = [

			'F1Header' => 'Text',
			'F1Desc' => 'Text',
			'F1BtnLink' => 'Text',
			'F1BtnText' => 'Text',

			'F2Header' => 'Text',
			'F2Desc' => 'Text',
			'F2BtnLink' => 'Text',
			'F2BtnText' => 'Text',

			'F2Count1' => 'Text',
			'F2Count2' => 'Text',
			'F2CountDesc1' => 'Text',
			'F2CountDesc2' => 'Text',

			'F3Header' => 'Text',
			'F3Desc' => 'Text',
			'F3BtnLink' => 'Text',
			'F3BtnText' => 'Text',

			'F5Header' => 'Text',

			'F6Header' => 'Text',
			'F6Desc' => 'Text',



		
		];

		private static $has_one = [
			'F1BG' => Image::class,
			'F3BG' => Image::class,
			'F6BG' => Image::class,
		];

		private static $owns = [
			'F1BG',
			'F3BG',
			'F6BG',

	    ];

		private static $allowed_children = "none";

		private static $defaults = array(
			'PageName' => 'Home Page',
			'MenuTitle' => 'Home',
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
				$upload = UploadField::create('F1BG','Image'),
				new TextareaField('F1Header', 'Header'),
				new TextareaField('F1Desc', 'Sub Text'),
				new TextField('F1BtnText', 'Button Text'),
				new TextField('F1BtnLink', 'Button Link'),
			));

			# SET FIELD DESCRIPTION 
			$upload->setDescription('Max file size: 2MB | Dimension: 1920px x 1080px');
			# Set destination path for the uploaded images.
			$upload->setFolderName('homepage');

			/*
			|-----------------------------------------------
			| @Frame2
			|----------------------------------------------- */
			$fields->addFieldsToTab('Root.Frame2.Main', array(
				new TextField('F2Header', 'Header'),
				new TextareaField('F2Desc', 'Sub Text'),
				new TextField('F2BtnText', 'Button Text'),
				new TextField('F2BtnLink', 'Button Link'),
			));

			$fields->addFieldsToTab('Root.Frame2.GreenCapsule', array(
				new TextField('F2Count1', 'Count'),
				new TextField('F2CountDesc1', 'Description'),
			));

			$fields->addFieldsToTab('Root.Frame2.YellowCapsule', array(
				new TextField('F2Count2', 'Count'),
				new TextField('F2CountDesc2', 'Description'),
			));

			/*
			|-----------------------------------------------
			| @Frame3
			|----------------------------------------------- */
			$fields->addFieldsToTab('Root.Frame3.Main', array(
				$upload = UploadField::create('F3BG','Image'),
				new TextField('F3Header', 'Header'),
				new TextareaField('F3Desc', 'Sub Text'),
				new TextField('F3BtnText', 'Button Text'),
				new TextField('F3BtnLink', 'Button Link'),
			));

			# SET FIELD DESCRIPTION 
			$upload->setDescription('Max file size: 2MB | Dimension: 1920px x 1080px');
			# Set destination path for the uploaded images.
			$upload->setFolderName('homepage');

			/*
			|-----------------------------------------------
			| @Frame5
			|----------------------------------------------- */
			$fields->addFieldsToTab('Root.Frame5.Main', array(
				new TextField('F5Header', 'Header'),
			));

			/*
			|-----------------------------------------------
			| @Frame5
			|----------------------------------------------- */
			$fields->addFieldsToTab('Root.Frame6.Main', array(
				$upload = UploadField::create('F6BG','Image'),
				new TextField('F6Header', 'Header'),
				new TextareaField('F6Desc', 'Sub Text'),
			));

			# SET FIELD DESCRIPTION 
			$upload->setDescription('Max file size: 2MB | Dimension: 1920px x 1080px');
			# Set destination path for the uploaded images.
			$upload->setFolderName('homepage');


			# SET FIELD DESCRIPTION 
			// $uploadf->setDescription('Max file size: 2MB | Dimension: 1366px x 768px');
			
			# Set destination path for the uploaded images.
			// $uploadf->setFolderName('homepage/frame-1');

			return $fields;
		}
	}

	class HomePageController extends PageController {
		
	}
}
