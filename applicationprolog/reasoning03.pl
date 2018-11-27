hasPermission(RHO,GOAL) :- hasObligation(RHO,GOAL).
violationCondition(AGENT,GOAL,CONDITION):- hasCondition(GOAL,CONDITIONSET),notIsPresent(CONDITION),isElementOf(CONDITION,CONDTIONSET),tryReach(AGENT,GOAL).
violationRelation(AGENT,GOAL,RELATION):- hasRelation(GOAL,RELATIONSET),notIsPresent(RELATION),isElementOf(RELATION,RELATIONSET),tryReach(AGENT,GOAL).
violationEntity(AGENT,GOAL,ENTITY) :- hasEntity(GOAL,ENTITYSET),notIsPresent(ENTITY),isElementOf(ENTITY,ENTITYSUBSET),tryReach(AGENT,GOAL).
consequenceOfBadEvent(GOAL,AGENT,RISK,FATALITY) :- violationCondition(AGENT,GOAL,CONDITION),hasRisk(CONDITION,RISK,FATALITY).
consequenceOfBadEvent(GOAL,AGENT,RISK,FATALITY) :- violationRelation(AGENT,GOAL,RISK),hasRisk(CONDITION,RISK,FATALITY).
hasPossibility(OTHERRELATION) :- violationRelation(AGENT,GOAL,RISK),affects(RELATION,OTHERRELATION),notHasPossibility(OTHERRELATION).
stopIn(GOAL) :- consequenceOfBadEvent(GOAL,AGENT,RISK,FATALITY).
stopIn(GOAL):-violationEntity(AGENT,GOAL,ENTITY).
consequenceOfBadEvent(GOAL,AGENT,RISK,FATALITY) :- hasRelation(GOAL,RELATIONSET),isElementOf(RELATION,RELATIONSET),hasRisk(RELATION,RISK,FATALITY),tryReach(AGENT,GOAL).
isReached(GOAL) :- notStopIn(GOAL,AGENTDONETHIS),isSubSet(AGENTDONETHIS,AGENTOBLIGATIOTHIS).


hasRole(agente5,executor3).
hasObligation(executor3,goal11).
tryReach(agente5,goal11).
hasCondition(goal11,cg1).
isElementOf(umidade70,cg1).
notIsPresent(umidade70).
hasRisk(umidade70,eletrocutado,morte).
