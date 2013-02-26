<?php
/**
* SBND F&CMS - Framework & CMS for PHP developers
*
* Copyright (C) 1999 - 2013, SBND Technologies Ltd, Sofia, info@sbnd.net, http://sbnd.net
*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
*
* @author SBND Techologies Ltd <info@sbnd.net>
* @package basic.scripts.assetmanager
* @version 7.0.4  
*/

/**
 * @author Evgeni Baldzhiyski
 * @version 0.1
 * @since 13.02.2013
 */
class AssetManager extends CmsComponent {

	public $maxFileSize = 300000;
	public $allowedTypes = "*";
	public $upload_path = "upload/";
	public $storage = "assets";
	
	function main(){
		$this->unsetCmpPermition('edit');
		
		$this->setCmpPermition('folders-manager', BASIC_LANGUAGE::init()->get('folders-manager'));
	}
	
	/**
	 * Define setting for component. Values will be overwrite values of these class properties
	 * 
	 * @access public
	 * @return array
	 */
	function settingsData(){
		return array(
			'maxFileSize'   => $this->maxFileSize,
			'allowedTypes'  => $this->allowedTypes,
			'upload_path' 	=> $this->upload_path,
			'storage' 		=> $this->storage
		);
	}
	/**
	 * 
	 * Desciption of fields for component setting
	 * @access public
	 * @return array
	 */
	function settingsUI(){	
		return array(
			'maxFileSize' => array(
				'text' => BASIC_LANGUAGE::init()->get('maxFileSize')
			),
			'allowedTypes' => array(
				'text' => BASIC_LANGUAGE::init()->get('allowedTypes')
			),
			'upload_path' => array(
				'text' => BASIC_LANGUAGE::init()->get('upload_path')
			),
			'storage' => array(
				'text' => BASIC_LANGUAGE::init()->get('storage')
			)
		);
	}	
}