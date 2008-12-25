<?php defined("SYSPATH") or die("No direct script access.");
/**
 * Gallery - a web based photo album viewer and editor
 * Copyright (C) 2000-2008 Bharat Mediratta
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or (at
 * your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street - Fifth Floor, Boston, MA  02110-1301, USA.
 */
class Items_Controller extends REST_Controller {
  protected $resource_type = "item";

  /**
   *  @see REST_Controller::_index()
   */
  public function _index() {
    throw new Exception("@todo Item_Controller::_index NOT IMPLEMENTED");
  }

  /**
   *  @see REST_Controller::_form_add($parameters)
   */
  public function _form_add($parameters) {
    throw new Exception("@todo Items_Controller::_form_add NOT IMPLEMENTED");
  }

  /**
   *  @see REST_Controller::_form_edit($resource)
   */
  public function _form_edit($item) {
    throw new Exception("@todo Items_Controller::_form_edit NOT IMPLEMENTED");
  }

  public function _show($item) {
    // Redirect to the more specific resource type, since it will render
    // differently.  We could also just delegate here, but it feels more appropriate
    // to have a single canonical resource mapping.
    access::required("view", $item);
    return url::redirect("{$item->type}s/$item->id");
  }

  public function _delete($item) {
    throw new Exception("@todo Item_Controller::_delete NOT IMPLEMENTED");
  }

  public function _create($item) {
    throw new Exception("@todo Item_Controller::_create NOT IMPLEMENTED");
  }

  public function _update($item) {
    throw new Exception("@todo Item_Controller::_update NOT IMPLEMENTED");
  }
}
