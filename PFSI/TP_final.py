##Ce travail a été réalisé par:
    #1.Bavon NZORIJANA
    #2.Laurene Ingabire
#1.On a compté les sommets à partir du debut de projet c-à-d à partir de la tache de duree 0
g=[
    [-1,1,-1,-1,-1,-1,-1,-1,-1],
    [1,-1,10,-1,-1,-1,-1,-1,-1],
    [-1,10,-1,5,5,10,-1,-1,-1],
    [-1,-1,5,-1,0,-1,-1,-1,-1],
    [-1,-1,5,0,-1,-1,4,-1,-1],
    [-1,-1,10,-1,-1,-1,0,2,-1],
    [-1,-1,-1,-1,4,0,-1,-1,-1],
    [-1,-1,-1,-1,-1,2,-1,-1,1],
    [-1,-1,-1,-1,-1,-1,-1,1,-1],
]
#2."""Fonction qui prend en paramètre une matrice d'adjacence m d'un graphe, un sommet k et retourne la liste de tous les prédécesseurs de k dans le graphe représenté par m. Chaque arête a pour poids sa durée si elle représente une tâche, et -1 s'il n'existe pas d'arête.
def predecesseurs(m,k):
    liste_predecesseurs=[]                                    #creation d'une liste vide
    for j in range(len(m)):               #on a parcouru la matrice avec la boucle for
        if m[j][k]!=-1 :          ##Si la distance entre le sommet source et le sommet parcouru est superieur à -1,alors c'est le voisin du sommet source et si le sommet parcouru est son extremite initiale
            liste_predecesseurs.append(j)                     #on l'ajoute dans la liste des predecesseurs de k
                                            #fin pour

    return liste_predecesseurs
#3.//Fonction qui prend en paramètre une matrice d'adjacence m d'un graphe, un sommet k, et retourne la liste de tous les successeurs de k dans le graphe représenté par m. Chaque arête a pour poids sa durée si elle représente une tâche, et -1 s'il n'existe pas d'arête.

def successeurs(m,k):
    liste_successeurs = []                                #creation d'une liste vide des successeurs de k
    for i in range(len(m)):               #on a parcouru la matrice avec la boucle for
        if m[i][k]!=-1 :          ##Si la distance entre le sommet source et le sommet parcouru est superieur à -1,alors c'est le voisin du sommet source et si le sommet parcouru est son extremite finale
            liste_successeurs.append(i)                      #on l'ajoute dans la liste des successeurs de k
                                            #fin pour
    return liste_successeurs                                #retourne la liste
#4 Fonction qui prend en paramètre la matrice d'adjacence d'un graphe et renvoie deux listes,"deb_tot" et "deb_tard", contenant les dates de début au plus tôt et au plus tard de chacune des tâches.Cette fonction utilise l'algorithme du chemin critique vu en cours.
def calcul_date(m):
    """
    Input:
        m: matrice d'adjacence (-1 codant l'absence d'arête)
    Output:
        deb_tot: liste contenant les dates de début au plus tôt de chacune des tâches
        deb_tard: liste contenant les dates de début au plus tard de chacune des tâches
    """

    n = len(m)
    deb_tot = [None for i in range(n)]
    deb_tard = [None for i in range(n)]

    # Algorithme du chemin critique vu en cours :

    deb_tot[0] = 0
    for k in range(1,n):
        predecesseurs_k = predecesseurs(m,k)
        for j in predecesseurs_k:
            deb_tot_possibles = [deb_tot[j] + m[k][j]]
            deb_tot[k] = max(deb_tot_possibles)

    deb_tard[n-1] = deb_tot[n-1]
    for k in range(n-2,-1,-1):
        successeurs_k = successeurs(m,k)
        deb_tard_possibles = [deb_tard[j] - m[k][j] for j in successeurs_k]
        deb_tard[k] = min(deb_tard_possibles)

    return deb_tot, deb_tard

print(calcul_date(g))
#5.on a proposé une fonction marge qui prend en parametre deux listes
def marge(deb_tot,deb_tard):
    """
    fonction qui prend en paramètre deux listes contentant les dates de début au plus tôt et au plus tard
    de chacune des tâches, et renvoie une liste contenant la marge de chacune des tâches.

    Input:
        deb_tot: liste contenant les dates de début au plus tôt de chacune des tâches
        deb_tard: liste contenant les dates de début au plus tard de chacune des tâches
    Output:
        marge: liste contenant la marge de chacune des tâches
               marge = début au plus tard - début au plus tôt
    """

    marge = [None for i in range(len(deb_tot))]
    for i in range(len(marge)):
        marge[i] = deb_tard[i] - deb_tot[i]

    return marge
#============================================================================================
#6.
tache = ["A", "B", "C", "D", "E", "F", "G", "H"]
designation = [
    "Evaluation des besoins clients",
    "Validation du projet par le client",
    "Rédaction des spécifications de l'application",
    "Définition des technologies à mettre en oeuvre",
    "Définition de la gestion temporelle et RH du projet",
    "Recrutement de personne qualifié",
    "Développement de l'application",
    "Finalisation, bêta-tests et rendu client"
]
arete_associee = [
    [0,1],
    [3,5],
    [1,2],
    [4,5],
    [2,6],
    [5,6],
    [6,7],
    [7,8]
]

def chemin_critique(m, tache, designation, arete_associee):
    """Fonction qui prend en paramètre la matrice d'adjacence m d'un graphe,
    la liste "tache", la liste "designation" et la liste "arete_associee";
    et qui affiche la date de début au plus tôt, au plus tard et la marge de chacune des tâches.
    Cette fonction affiche également la liste des tâches qui font partie du chemin critique.

    Input:
        m: matrice d'adjacence (-1 codant l'absence d'arête)
        tache: une liste contenant les lettres désignant chacune des tâches (de type ["A", "B",...])
        designation: une liste reprennant la description de chacune des tâches
        arete_associee: contient autant d'éléments que de taches dans le projet,
                        ses éléments sont des listes de deux entiers indiquant le sommet de départ et le sommet d'arrivé
                        définissant l'arête qui correspond à chacune des tâches
    Output:
        None, affiche directement les résultats d'intérêts avec des fonctions print
    """

    deb_tot, deb_tard = calcul_date(m)
    marges = marge(deb_tot, deb_tard)
    chemin_critique = []

    # Calcul et affichage de la date de début au plus tôt, au plus tard et la marge de chacune des tâches.

    print("====> Les mesures sont exprimés en jours depuis la date du début du projet.")
    print("====> Le jour 0 est le jour où le projet commence.\n")
    for (ind_t, t) in enumerate(tache): # pour chaque tâche
        t_sommet_depart = arete_associee[ind_t][0]
        t_sommet_arrivee = arete_associee[ind_t][1]
        t_duree = m[t_sommet_depart][t_sommet_arrivee] # bonus: on affichera aussi la durée des tâches
        t_deb_tot = deb_tot[t_sommet_depart]
        t_deb_tard = deb_tard[t_sommet_depart]
        t_designation = designation[ind_t]
        t_marge = marges[t_sommet_depart]
        if t_marge == 0: # si la marge vaut 0, on ajoute la tâche au chemin critique
            chemin_critique.append((t_sommet_depart, t, t_designation, t_duree))
        print("Tâche: {}. {} (durée: {} jours)".format(t, t_designation, t_duree))
        print("Début au plus tôt: {} jours, début au plus tard: {} jours, marge: {} jours\n".format(t_deb_tot, t_deb_tard, t_marge))

    print("\n")

    # affichage de la liste des tâches qui font partie du chemin critique

    print("====> Liste des tâches qui font parties du chemin critique: (tâche ayant une marge égale à 0)\n")
    chemin_critique.sort() # on trie selon les numéros du sommet de départ, pour afficher les tâches faisant partie du
                           # chemin critique, dans l'ordre dans lequel elles devront être effectuées
    for _, t, t_designation, t_duree in chemin_critique:
        print("Tâche: {}. {} (durée: {} jours)".format(t, t_designation, t_duree))
    # =======FIN======
