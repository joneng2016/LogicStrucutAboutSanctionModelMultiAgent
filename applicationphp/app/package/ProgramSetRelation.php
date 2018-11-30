<?php

namespace App\Package;

class ProgramSetRelation extends AbstractProgramExecution
{
	public function running()
	{
		(new Programs)
			->mountRelationSet(
					'rg0',
					'goal0',
					[
						'relationagenteXcapacete',
						'relationoculos',
						'relationagenteXroupagem',
						'relationagenteXluva',
						'relationagenteXbotas'
					],
					'file0'
			);
	}
}
