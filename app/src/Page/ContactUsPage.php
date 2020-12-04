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

	class ContactUsPage extends Page {

		private static $db = [

			'Latitude' => 'Text',
			'Longitude' => 'Text',

			'EmailRecipient' => 'Text',
		];

		private static $has_one = [
			'Pin' => Image::class,
		];

		private static $has_many = [
			'ContactDetails' => ContactDetail::class,
		];

		private static $owns = [
			'Pin',
		];

		private static $allowed_children = "none";

		private static $defaults = array(
			'PageName' => 'Contact Us Page',
			'MenuTitle' => 'Contact Us',
			'ShowInMenus' => true,
			'ShowInSearch' => true,
		);

		public function getCMSFields() {
			$fields = parent::getCMSFields();

			#Remove by tab
			$fields->removeFieldFromTab('Root.Main', 'Content');
			

			/*
			|-----------------------------------------------
			| @Frame 1
			|----------------------------------------------- */
			$fields->addFieldToTab('Root.Frame1', new TabSet('Frame1Sets',
				new Tab('Details',
					GridField::create('ContactDetails', 'Contact Details', 
						$this->ContactDetails(), 
					GridFieldConfig_RecordEditor::create(10)
					->addComponent(new GridFieldSortableRows('SortOrder'))
					)
				)
			));

			$fields->addFieldToTab('Root.Map', new TabSet('Frame3Sets',
				new Tab('Map',
					TextField::create('Latitude', 'Latitude'),
					TextField::create('Longitude', 'Longitude'),
					$pin = UploadField::create('Pin','Map Pin')
				)
			));

			$fields->addFieldToTab('Root.Email', TextField::create('EmailRecipient', 'Email Recipient'));

			# SET FIELD DESCRIPTION 
			$pin->setDescription('Max file size: 2MB | Dimension: 50px x 60px');
			
			# Set destination path for the uploaded images.
			$pin->setFolderName('ContactUsPage/icons');

			return $fields;
		}
	}

	class ContactUsPageController extends PageController {
		
	}
}
