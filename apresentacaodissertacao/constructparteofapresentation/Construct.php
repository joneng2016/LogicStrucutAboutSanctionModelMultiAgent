<?php   
	$readThis = [ 
		"violationRelation(ag_i,g_j,r_k) $ sendo que $ ag_i \in Agent \wedge g_k \in Goal \wedge c_k \in relation \wedge r_k  \in rg_n \wedge rg_n \subset RelationCondition",
		"violationEntity(ag_i,g_j,e_k) $ sendo que $ ag_i \in Agent \wedge g_j \in Goal \wedge e_k \in Entity \wedge e_k \in eg_n \wedge eg_n \subset EntityGoal",
		"hasRisk(X, risk_j, cs_k) | risk_k \in Risk \wedge cs_k \in Consequence \wedge (X = c_k \vee X = r_k",
		"possibilityHappensBadEvent(r_l) | r_l",
		"affectsOtherRelations(r_k,r_n) | \{ r_k, r_n\} \subset Relation",
		"lastGoal(g_i,\rho_m) | g_i \in Goal, \rho_m \in Role"		
	];
	$file = fopen("returnPrepare","w");
	foreach($readThis as $element)
	{		
		if(strpos($element,"sendo") != false)
			$element = str_replace("$", "", str_replace("sendo", "", str_replace("que", "", $element)));
		fwrite($file,"\begin{equation}\n    ".$element."\nend{equation}\n");
	}
	fclose($file);