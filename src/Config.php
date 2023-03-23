<?php
/*
 * This file is a part of the Enginiro project.
 *
 * Copyright (c) Enginiro project. For the full copyright and licensing information, please view the LICENSE.adoc file
 * that was distributed with this source code.
 */

declare(strict_types=1);

namespace Enginiro\PhpCsFixerConfig;

use PhpCsFixer\Config as Base;

class Config extends Base {
	private $rules = [
		'@PSR12' => true,
		'single_quote' => true,
		'declare_strict_types' => true,
		'strict_comparison' => true,
		'strict_param' => true,
		'header_comment' => [
			'header' => <<<'EOF'
	This file is a part of the Enginiro project.

	Copyright (c) Enginiro project. For the full copyright and licensing information, please view the LICENSE.adoc file
	that was distributed with this source code.
	EOF
,
			'location' => 'after_open',
			'separate' => 'bottom'
		],
		'braces' => [
			'position_after_functions_and_oop_constructs' => 'same'
		],
		'single_blank_line_at_eof' => false,
		'blank_line_after_opening_tag' => false,
		'elseif' => false
	];

	private $indent = "\t";

	private $lineEnding = "\n";

	public function __construct() {
		parent::__construct('enginiro');
	}

	public function setRule(string $rule, $value) {
		$this->rules[$rule] = $value;
		return $this;
	}

	public function getRules(): array {
		return $this->rules;
	}

	public function getIndent(): string {
		return $this->indent;
	}

	public function getLineEnding(): string {
		return $this->lineEnding;
	}
}
