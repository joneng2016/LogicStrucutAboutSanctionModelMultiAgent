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
            ],
            [
                "rg" => "rg3",
                "goal" => "goal3",
                "relation" => [
                    "relationxcondutivimetro"
                ],
                "fileName" => "filerg3"
            ],
            [
                "rg" => "rg4",
                "goal" => "goal4",
                "relation" => [
                    "relationXbastaogarra",
                    "relationcolarbastaogarra"
                ],
                "fileName" => "filerg4"
            ],
            [
                "rg" => "rg5",
                "goal" => "goal5",
                "relation" => [
                    "relationXbastaogarra",
                    "relationXcorda",
                    "relationcordabastaogarra",
                    "relationbastaogarratorre",
                    "relationbastaogarracondutor"
                ],
                "fileName" => "filerg5"
            ],
            [
                "rg" => "rg6",
                "goal" => "goal6",
                "relation" => [
                    "relationbastaogarrasela",
                    "relationXbastaogarra",
                    "relationXsela"
                ],
                "fileName" => "filerg6"
            ],
            [
                "rg" => "rg7",
                "goal" => "goal7",
                "relation" => [
                    "relationXsela",
                    "relationXcolar",
                    "relationtorresela",
                ],
                "fileName" => "filerg7"
            ],
            [
                "rg" => "rg8",
                "goal" => "goal8",
                "relation" => [
                    "relationbastaouniversalcorda",
                    "relationXbastaouniversal"
                ],
                "fileName" => "filerg8"
            ],
            [
                "rg" => "rg9",
                "goal" => "goal9",
                "relation" => [
                    "relationXbataouniversal",
                    "relationXcarretilha",
                    "relationbastaouniversalcarretilha"
                ],
                "fileName" => "filerg9"
            ],
            [
                "rg" => "rg10",
                "goal" => "goal10",
                "relation" => [
                    "relationXcorda",
                    "relationXbastaouniversal",
                    "relationbastaouniversalcorda",
                    "relationbastaouniversaltorre"
                ],
                "fileName" => "filerg10"
            ],
            [
                "rg" => "rg11",
                "goal" => "goal11",
                "relation" => [
                    "relationXcorda",
                    "relationXbastaouniversal",
                    "relationbastaouniversalcolar",
                    "relationbastaouniversalsela"
                ],
                "fileName" => "filerg11"
            ],
            [
                "rg" => "rg12",
                "goal" => "goal12",
                "relation" => [
                    "relationXcolar"
                ],
                "fileName" => "filerg12"
            ],
            [
                "rg" => "rg13",
                "goal" => "goal13",
                "relation" => [
                    "relationXbastao",
                    "relationbastaouniversalestopo",
                    "relationestopoisoladorvelho"
                ],
                "fileName" => "filerg13"
            ],
            [
                "rg" => "rg14",
                "goal" => "goal14",
                "relation" => [
                    "relationXbastaouniversal",
                    "relationbataouniversalcorda",
                    "relationcordaestopo",
                    "relationestopocorda"
                ],
                "fileName" => "filerg14"
            ],
            [
                "rg" => "rg15",
                "goal" => "goal15",
                "relation" => [
                    "relationchavecatracabastaouniversal",
                    "relationXchavecatraca",
                    "relationXbastaouniversal",
                    "relationchavecatracaparafuso"
                ],
                "fileName" => "filerg15"
            ]
        ];
        foreach($relations as $relation)
            (new Programs)->mountRelationSet($relation["rg"],$relation["goal"],$relation["relation"],$relation["fileName"]);
	}
}
