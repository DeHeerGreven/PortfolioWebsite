# Code Conventies

## Naam conventies

In dit project maak je gebruik van camelCase en Pascalcase.

PascalCase gebruik je voornamelijk bij het aanmaken van bijv. controllers:

``` command
php artisan make:controller ProjectController
```
camelCase gebruik je bij het aanmaken van variabelen of functies.

Hier een voorbeeld van de variabelen in de ProjectController

```php
$validatedData = $request->validate([
    'title' => 'required',
    'description' => 'required',
    'category_id' => 'required',
]);

// Maak een nieuw project aan
$project = Project::create([
    'title' => $validatedData['title'],
    'description' => $validatedData['description'],
    'category_id' => $validatedData['category_id'],
]);
```

Hier een voorbeeld van een functie in wat Javascript code:

```javascript
function showConfirmationPopup(projectTitle) {

}

```


De regels van de tabs zijn dat iets een keer moet laten inspringen.  Als je bijv. een if statement gaat schrijven dat je de code in de if statement een keer moet laten inspringen. 

Hier is een voorbeeld van hoe je NIET moet doen:

```javascript

function showConfirmationPopup(projectTitle) {
var confirmation = confirm("Are you sure you want to delete the project: " + projectTitle + "?");

if (confirmation) {
var userInput = prompt("Please enter the project title to confirm deletion:", "");

if (userInput !== null && userInput.trim() === projectTitle) {
    document.getElementById("deleteForm").submit();
} else {
    alert("Project deletion canceled.");
}
}
}

```

Hier is een voorbeeld van hoe je WEL moet doen:

```javascript

function showConfirmationPopup(projectTitle) {
    var confirmation = confirm("Are you sure you want to delete the project: " + projectTitle + "?");

    if (confirmation) {
        var userInput = prompt("Please enter the project title to confirm deletion:", "");

        if (userInput !== null && userInput.trim() === projectTitle) {
            document.getElementById("deleteForm").submit();
        } else {
            alert("Project deletion canceled.");
        }
    }
}

```



## Verzorgde code

De code moet er verzorgd en uit zien. Er moeten geen lege regels staan in de code. 

Als je aan het einde van het project zit, controleer dan of er geen onnodige code of comments in de code zitten. Als dat wel zo is, verwijder dat dan.

## Front End en Backend
### Front End
In dit project, voor maak je gebruik van HTML. Voor de CSS gebruik je Talwind CSS.

Voor de 'interactie' op de website gebruik je Javascript.

### Backend
Voor de backend gebruik je, wat je misschien al kunt zien, Laravel.

Je gebruikt hierbij versie 10.

