<?php
/**
 *
 * PayPal Donation extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2015 Skouat
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace skouat\ppde\operators;

/**
 * Interface for our currency operator
 *
 * This describes all of the methods we'll have for working with a set of pages
 */
interface currency_interface
{
	/**
	 * Get data from currency table
	 *
	 * @param int    $currency_id
	 * @return array Array of currency data entities
	 * @access public
	 */
	public function get_currency_data($currency_id = 0);

	/**
	 * Add a currency
	 *
	 * @param object $entity Currency entity with new data to insert
	 * @return currency_interface Added currency entity
	 * @access public
	 */
	public function add_currency_data($entity);

	/**
	 * Delete a currency
	 *
	 * @param int $currency_id The currency identifier to delete
	 * @return bool True if row was deleted, false otherwise
	 * @access public
	 */
	public function delete_currency_data($currency_id);
}
