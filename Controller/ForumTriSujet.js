const selectTri = $("#tri");

selectTri.change(function(e) {
    const triSelectionnee = $("#tri option:selected").val();
    $.ajax(
        "ExecuteTriSujet.php?tri=" + triSelectionnee, {
            success: function(data) {
                const topics = JSON.parse(data);
                console.log(data);
                $(".truc").remove();

                topics.forEach(topic => {
                    const selectTopics = $("<tr>").attr("class", "truc").appendTo($("#myTable"));

                    const newOption1 = $("<td class='colonne_sujet'>").append($("<span class='nom_sujet'><a class='lien_sujet' href='Projet_Sujet.php?id=" + topic.idTopic + "'>" + topic.titre + "</a></span><br><span class='nom_crea_date'>Par nomCréateur le " + topic.dateAjout + "</span>"));
                    selectTopics.append(newOption1);

                    const newOption2 = $("<td>").append("testttt");
                    selectTopics.append(newOption2);

                    const newOption3 = $("<td class='forum_vues'>").append("1506");
                    selectTopics.append(newOption3);

                    const newOption4 = $("<td class='forum_notes'>").append("+48");
                    selectTopics.append(newOption4);

                    const newOption5 = $("<td class='forum_activite'>").append(topic.dateAjout);
                    selectTopics.append(newOption5);

                    console.log(topics);
                });
            },
            error: function() {
                console.error("Erreur lors de l'appel AJAX");
            }
        }
    );
});