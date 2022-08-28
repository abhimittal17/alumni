const arr1 = [
    {
      "title":"Project 1 - Build an IOS Lab",
      "projectid":"1",
      "description":"Impulse oscillometry (IOS) is a variant of forced oscillation technique, described by Dubois over 50 years ago, which permits passive measurement of lung mechanics. In this method, sound waves are superimposed on normal tidal breathing, and the disturbances in flow and pressure caused by the external waves are used to calculate parameters describing the resistance to airflow and reactive parameters that mostly relate to efficient storage and return of energy by the lung. It requires minimal patient cooperation and can be done easily in subjects who are unable to perform spirometry. Importantly, IOS can differentiate small airway obstruction from large airway obstruction and is more sensitive than spirometry for peripheral airway disease. It has been used to study various respiratory disorders, especially asthma and is suitable for measuring bronchodilatory response as well as bronchoprovocation testing."
    },
    {
      "title":"Project 2 - Build a New Library",
      "projectid":"2",
      "description":"library, traditionally, collection of books used for reading or study, or the building or room in which such a collection is kept. The word derives from the Latin liber, “book,” whereas a Latinized Greek word, bibliotheca, is the origin of the word for library in German, Russian, and the Romance languages.From their historical beginnings as places to keep the business, legal, historical, and religious records of a civilization, libraries have emerged since the middle of the 20th century as a far-reaching body of information resources and services that do not even require a building. Rapid developments in computers, telecommunications, and other technologies have made it possible to store and retrieve information in many different forms and from any place with a computer and a telephone connection. "
    },
    {
      "title":"Project 3 - Research Work",
      "projectid":"3",
      "description":"A research article is a written paper that illustrates an outcome of scientific research with supporting clinical data. This differs from other types of informative articles, such as magazine features or research papers, which typically address the topic in a general scope as a means of introduction. A research article, on the other hand, is written by and for researchers for the purpose of making specific findings known to the scientific community at large. In fact, rather than appearing in a consumer or industry publication, a research article is found exclusively in a peer-reviewed scientific or medical journal, such as The Journal of the American Medical Association, for example.Another key difference between other papers and a research article is that the latter strictly presents facts, rather than serve as a letter of opinion or a summary of the existing scientific literature. "
    },
    {
      "title":"Project 4 - Infrastructural Funds",
      "projectid":"4",
      "description":"Infrastructure is a term architects, engineers, and urban planners use to describe essential facilities, services, and organizational structures for communal use, most commonly by residents of cities and towns. Politicians often think of infrastructure in terms of how a nation can help corporations move and deliver their goods—water, electricity, sewage, and merchandise are all about movement and delivery via infrastructure.Infra- means below, and sometimes these elements are literally below the ground, like water and natural gas supply systems. In modern environments, infrastructure is thought to be any facility we expect but don't think about because it works for us in the background, unnoticed—below our radar. The global information infrastructure for communications and internet involves satellites in space—not underground at all, but we rarely think about how that last Tweet got to us so quickly."
    },
    {
      "title":"Project 5 - Internal Repair Work",
      "projectid":"5",
      "description":"Much of the bipartisan infrastructure legislation is directed toward roads and bridges: pouring billions of dollars toward an expansive backlog of needed repairs across the country, and shoring up the nation’s highways and infrastructure to withstand the toll of climate change.The legislation, which includes about $110 billion in new federal funding for roads, bridges and other projects, also ensures the continuation of existing transportation programs, while calling for increased attention to safety and climate provisions.The measure increases funding for programs intended to provide safe commutes for pedestrians, and creates a $350 million pilot program for projects that reduce collisions between vehicles and wildlife. The legislation also formally establishes a federal program designed to encourage children to walk or bike to school."
    },
    {
      "title":"Project 6 - Scholarships for International Students",
      "projectid":"6",
      "description":"International Relations is a wide-ranging subject that allows students to investigate and research the relationships between countries and governments. Sometimes it’s called international studies, international affairs, or global studies, and it can be spread across a university’s humanities and social science departments.When you study for an International Relations degree, the focus lies on relationships between nation states and large intergovernmental organizations like the EU, UN or World Health Organisation. The subject is often categorised as either political science or interdisciplinary. These degrees cover areas of politics, law, history, geography and economics.Many European universities offer International Relations degrees, either at Bachelor’s or Master’s levels. And going abroad to study this subject is the smartest move you can make: You will get first-hand experience of what it means to live abroad and interact with people from different backgrounds and cultures!"
    }
]
const query = window.location.search.substring(1);
const projectid = query.split("=")[1];
const projectdetails = arr1.filter((item)=>item.projectid===projectid);
console.log(projectdetails);
if(projectdetails){
   const title = document.getElementById('desc-title');
   const description = document.getElementById('desc-para');
   title.innerHTML = projectdetails[0].title;
   description.innerHTML = projectdetails[0].description;
}
else{
  alert("Page not Found!");
}