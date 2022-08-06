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

	class ActionPage extends Page {

		private static $db = [
			'F1Title' => 'Text',
			'F2Header' => 'Text',
			'F2Count' => 'Text',
			'F2Desc' => 'Text',
			'F3Header' => 'Text',
			'F3Count' => 'Text',
			'F3Desc' => 'Text',
			'F4Header' => 'Text',
			'F4Desc' => 'Text',
		];

		private static $has_one = [
			'F1BG' => Image::class,
			'F4IMG' => Image::class,
		];

		private static $owns = [
			'F1BG',
			'F4IMG',
	    ];

		private static $allowed_children = "none";

		private static $defaults = array(
			'PageName' => 'Action Page',
			'MenuTitle' => 'What We Do',
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
				new TextField('F1Title', 'Title'),
				$upload = UploadField::create('F1BG','Background'),
			));

			# SET FIELD DESCRIPTION 
			$upload->setDescription('Max file size: 2MB | Dimension: 1920px x 1080px');
			# Set destination path for the uploaded images.
			$upload->setFolderName('action');

			 /*
			|-----------------------------------------------
			| @Frame2
			|----------------------------------------------- */
			$fields->addFieldsToTab('Root.Frame2.Main', array(
				new TextField('F2Header', 'Header'),
				new TextField('F2Count', 'Count'),
				new TextareaField('F2Desc', 'Sub Text'),
			));

			 /*
			|-----------------------------------------------
			| @Frame3
			|----------------------------------------------- */
			$fields->addFieldsToTab('Root.Frame3.Main', array(
				new TextField('F3Header', 'Header'),
				new TextField('F3Count', 'Count'),
				new TextareaField('F3Desc', 'Sub Text'),
			));

			 /*
			|-----------------------------------------------
			| @Frame4
			|----------------------------------------------- */
			$fields->addFieldsToTab('Root.Frame4.Main', array(
				new TextField('F4Header', 'Header'),
				new TextField('F4Desc', 'Sub Text'),
				$upload = UploadField::create('F4IMG','Image'),
			));

			# SET FIELD DESCRIPTION 
			$upload->setDescription('Max file size: 2MB | Dimension: 500px x 500px');
			# Set destination path for the uploaded images.
			$upload->setFolderName('action');

			# SET FIELD DESCRIPTION 
			// $uploadf->setDescription('Max file size: 2MB | Dimension: 1366px x 768px');
			
			# Set destination path for the uploaded images.
			// $uploadf->setFolderName('homepage/frame-1');

			return $fields;
		}
	}

	class ActionPageController extends PageController {
		
	}
}
