hasPermission(RHO,GOAL) :- hasObligation(RHO,GOAL).

conditionViol(AGENT,GOAL,CONDITION):- requiresCirc(GOAL,CONDITION),notIsPresent(CONDITION),instanceOfCond(CONDITION),starts(AGENT,GOAL).

relationViol(AGENT,GOAL,RELATION):- requiresCirc(GOAL,RELATION),notIsPresent(RELATION),instanceOfRel(RELATION),starts(AGENT,GOAL).

entityViol(AGENT,GOAL,ENTITY) :- requiresEntity(GOAL,ENTITY),notIsPresent(ENTITY),starts(AGENT,GOAL).

negConseqFor(GOAL,AGENT,RISK,CONSEQUENCE) :- possOfNegConseqFor(OTHERRELATION),happensNegConseqFor(OTHERRELATION),requiresCirc(GOAL,OTHERRELATION),instanceOfRel(OTHERRELATION),hasRisk(OTHERRELATION,RISK,CONSEQUENCE),starts(AGENT,GOAL).

stopped(GOAL):-entityViol(AGENT,GOAL,ENTITY).

stopped(GOAL) :- negConseqFor(GOAL,AGENT,RISK,CONSEQUENCE).

enabledToStart(AGENT,GOAL) :- adoptsRole(AGENT,RHO),hasPermission(RHO, GOAL),nextGoal(GOAL,NEXTGOAL),reached(GOAL).

stopped(GOAL) :- adoptsRole(AGENT,RHO),hasPermission(RHO, GOAL),lastGoal(GOAL,NEXTGOAL),reached(GOAL).


requiresCirc(g19,relParafusoConector).
hasObligation(executor3,g19).
hasObligation(executor4,g19).
hasObligation(executor5,g19).
starts(agente5,g19).
starts(agente6,g19).
starts(agente7,g19).
adoptsRole(agente5,executor3).
adoptsRole(agente6,executor4).
adoptsRole(agente7,executor5).
hasRisk(relParafusoConector,eletrocutado).
possOfNegConseqFor(relParafusoConector).
happensNegConseqFor(relParafusoConector).
instanceOfRel(relParafusoConector).
hasRisk(relParafusoConector,eletrocutado,morte).