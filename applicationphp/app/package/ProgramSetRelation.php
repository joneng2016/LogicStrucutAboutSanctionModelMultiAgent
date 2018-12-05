<?php

namespace App\Package;

class ProgramSetRelation extends AbstractProgramExecution
{
	public function running()
	{
        $relations = [
            [
                "rg" => "rg0", 
                "goal" => "goal0", 
                "relation" => [
					'relationagenteXcapacete',
					'relationoculos',
					'relationagenteXroupagem',
					'relationagenteXluva',
					'relationagenteXbotas'
				],
                "fileName" => "filerg0"
            ],
            [
                "rg" => "rg1",
                "goal" => "goal1",
                "relation" => [
                    "relationXplano",
                    "relationplanoglicerina",
                    "relationplanocorda",
                    "relationplanobastaouniversal",
                    "relationplanobastaogarra",
                    "relationplanosoquete"
                ],
                "fileName" => "filerg1"
            ],
            [
                "rg" => "rg2",
                "goal" => "goal2",
                "relation" => [
                    "relationcondutivimetrocorda",
                    "relationcondutivimetrobastaouniversal",
                    "relationcondutivimetrobastaogarra",
                    "relationcondutivimetrosoquete",
                ],
                "fileName" => "filerg2"
            ]
        ];
        foreach($relations as $relation)
            (new Programs)->mountRelationSet($relation["rg"],$relation["goal"],$relation["relation"],$relation["fileName"]);
	}
}
