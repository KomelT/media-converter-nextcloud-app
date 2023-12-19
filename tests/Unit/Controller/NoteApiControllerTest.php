<?php

declare(strict_types=1);
// SPDX-FileCopyrightText: Tilen Komel <me@komelt.dev>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\MediaConverter\Tests\Unit\Controller;

use OCA\MediaConverter\Controller\NoteApiController;

class NoteApiControllerTest extends NoteControllerTest {
	public function setUp(): void {
		parent::setUp();
		$this->controller = new NoteApiController($this->request, $this->service, $this->userId);
	}
}
