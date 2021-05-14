<?php

namespace App\Models;

use Baum\Node;

class Menu extends Node
{
	// protected $fillable = ['name'];
	protected $table = 'dictionary';

  // 'parent_id' column name
  protected $parentColumn = 'parent_id';

  // 'lft' column name
  protected $leftColumn = 'lidx';

  // 'rgt' column name
  protected $rightColumn = 'ridx';

  // 'depth' column name
  protected $depthColumn = 'nesting';

  // guard attributes from mass-assignment
  protected $guarded = array('id', 'parent_id', 'lidx', 'ridx', 'nesting');
}
