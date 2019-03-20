hasPermission(RHO,GOAL) :- hasObligation(RHO,GOAL).
violationCondition(AGENT,GOAL,CONDITION):- hasCondition(GOAL,CONDITIONSET),notIsPresent(CONDITION),isElementOf(CONDITION,CONDTIONSET),tryReach(AGENT,GOAL).
violationRelation(AGENT,GOAL,RELATION):- hasRelation(GOAL,RELATIONSET),notIsPresent(RELATION),isElementOf(RELATION,RELATIONSET),tryReach(AGENT,GOAL).
violationEntity(AGENT,GOAL,ENTITY) :- hasEntity(GOAL,ENTITYSET),notIsPresent(ENTITY),isElementOf(ENTITY,ENTITYSUBSET),tryReach(AGENT,GOAL).
consequenceOfBadEvent(GOAL,AGENT,RISK,FATALITY) :- violationCondition(AGENT,GOAL,CONDITION),hasRisk(CONDITION,RISK,FATALITY).
consequenceOfBadEvent(GOAL,AGENT,RISK,FATALITY) :- violationRelation(AGENT,GOAL,RISK),hasRisk(CONDITION,RISK,FATALITY).
hasPossibility(OTHERRELATION) :- violationRelation(AGENT,GOAL,RISK),affects(RELATION,OTHERRELATION),notHasPossibility(OTHERRELATION).
stopIn(GOAL):-violationEntity(AGENT,GOAL,ENTITY).
consequenceOfBadEvent(GOAL,AGENT,RISK,FATALITY) :- hasRelation(GOAL,RELATIONSET),isElementOf(RELATION,RELATIONSET),hasRisk(RELATION,RISK,FATALITY),tryReach(AGENT,GOAL).
stopIn(GOAL) :- consequenceOfBadEvent(GOAL,AGENT,RISK,FATALITY).
isReached(GOAL) :- notStopIn(GOAL,AGENTDONETHIS),isSubSet(AGENTDONETHIS,AGENTOBLIGATIOTHIS).


hasRole(agente2,executor1).
hasRole(agente3,executor1).
hasRole(agente4,executor2).
hasObligation(executor1,goal1).
hasObligation(executor2,goal1).
tryReach(agente2,goal1).
tryReach(agente3,goal1).
tryReach(agente4,goal1).
hasEntity(goal1,eg1).
isElementOf(pano,eg1).
notIsPresent(pano).