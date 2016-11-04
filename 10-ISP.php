<?php

namespace Bad_Example {

	class Peter {

		public function program() {
			return 'Program initech systems to deposit fractions of pennies to private account';
		}

		public function file_tps() {
			return 'Place cover sheet on TPS report before going out';
		}

		public function collate() {
			return 'Collect and combine texts, information, and figures in proper order.';
		}
	}

	class Lumbergh {

		public function harass( Peter $underling ) {

			$underling->program();
			$underling->file_tps();
			$underling->collate();
		}
	}

	$lumbergh = new Lumbergh();

	$lumbergh->harass( new Peter() );

	interface UnderlingInterface {

		public function program();

		public function filetps();

		public function collate();
	}

	class Boss2 {

		public function harass( UnderlingInterface $underling ) {

			$underling->program();
			$underling->filetps();
			$underling->collate();
		}
	}

	class Subordinate implements UnderlingInterface {

		public function program() {
			return 'Program initech systems...';
		}

		public function filetps() {
			return 'Place cover sheet on TPS...';
		}

		public function collate() {
			return 'Collect and combine texts...';
		}
	}

	class Consultant implements UnderlingInterface {

		public function program() {
			return 'Outsource task to India';
		}

		public function filetps() {
			return 'Place cover sheet on TPS report before going out';
		}

		public function collate() {
			// todo: fix this - consultants don’t collate
		}
	}

}

namespace {

	interface ConsultantInterface {

		public function program();

		public function filetps();

		public function collate();
	}

}