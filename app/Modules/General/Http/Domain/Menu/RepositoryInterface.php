<?php
namespace App\Modules\General\Http\Domain\Menu;

/**
 * Class RepositoryInterface
 * @package Fully\Repositories
 * @author Sefa Karagöz
 */
interface RepositoryInterface {


	/**
	 * @param $id
	 * @return mixed
	 */
	public function find($id);

	/**
	 * Get al data
	 * @return mixed
	 */
	public function all();

	/**
	 * Get data with paginate
	 * @param int $page
	 * @param int $limit
	 * @param bool $all
	 * @return mixed
	 */
	public function paginate($page = 1, $limit = 10, $all = false);


}
