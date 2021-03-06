<?php
namespace App\Modules\General\Http\Domain\Typi\Menus;

use App\Modules\General\Http\Domain\Typi\Core\RepositoryInterface;

//interface LinkerInterface extends RepositoryInterface
interface MenuInterface
{


	/**
	 * Render a menu
	 *
	 * @param  string $name menu name
	 * @return string       html code of a menu
	 */
	public function render($name);

	/**
	 * Get all models
	 *
	 * @param  boolean  $all  Show published or all
	 * @param  array    $with Eager load related models
	 * @return Collection
	 */
	public function all(array $with = array(), $all = false);

	/**
	 * Build a menu
	 *
	 * @deprecated
	 * @param  string $name       menu name
	 * @return string             html code of a menu
	 */
	public function build($name);

	/**
	 * Get a menu
	 *
	 * @param  string $name       menu name
	 * @return Collection         nested collection
	 */
	public function getMenu($name);


}
