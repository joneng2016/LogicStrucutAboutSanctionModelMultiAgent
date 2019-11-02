hasPermission(RHO,GOAL) :- hasObligation(RHO,GOAL).

conditionViol(AGENT,GOAL,CONDITION):- requiresCirc(GOAL,CONDITION),notIsPresent(CONDITION),instanceOfCond(CONDITION),starts(AGENT,GOAL).

relationViol(AGENT,GOAL,RELATION):- requiresCirc(GOAL,RELATION),notIsPresent(RELATION),instanceOfRel(RELATION),starts(AGENT,GOAL).

entityViol(AGENT,GOAL,ENTITY) :- requiresEntity(GOAL,ENTITY),notIsPresent(ENTITY),starts(AGENT,GOAL).

negConseqFor(GOAL,AGENT,RISK,CONSEQUENCE) :- conditionViol(AGENT,GOAL,CONDITION),hasRisk(CONDITION,RISK,CONSEQUENCE).

negConseqFor(GOAL,AGENT,RISK,CONSEQUENCE) :- relationViol(AGENT,GOAL,RELATION),hasRisk(RELATION,RISK,CONSEQUENCE).

possOfNegConseqFor(OTHERRELATION) :- relationViol(AGENT,GOAL,RISK),affectsRels(RELATION,OTHERRELATION).

negConseqFor(GOAL,AGENT,RISK,CONSEQUENCE) :- possOfNegConseqFor(OTHERRELATION),happensNegConseqFor(OTHERRELATION),requiresCirc(GOAL,OTHERRELATION),notIsPresent(OTHERRELATION),isInstanceOfRel(OTHERRELATION),hasRisk(OTHERRELATION,RISK,CONSEQUENCE),starts(AGENT,GOAL).

stopped(GOAL):-entityViol(AGENT,GOAL,ENTITY).

stopped(GOAL) :- negConseqFor(GOAL,AGENT,RISK,CONSEQUENCE).

enabledToStart(AGENT,GOAL) :- adoptsRole(AGENT,RHO),hasPermission(RHO, GOAL),nextGoal(GOAL,NEXTGOAL),reached(GOAL).

stopped(GOAL) :- adoptsRole(AGENT,RHO),hasPermission(RHO, GOAL),lastGoal(GOAL,NEXTGOAL),reached(GOAL).


adoptsRole(agente2,executor1). 
adoptsRole(agente3,executor1).	 	
adoptsRole(agente4,executor2).	 
hasObligation(executor1,g1).
hasObligation(executor2,g1).
starts(agente2,g1). 
starts(agente3,g1).	 	
starts(agente4,g1).
requiresEntity(g1,pano).		
notIsPresent(pano).