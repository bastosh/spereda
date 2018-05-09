<article class="post">
    <div class="dividewhite6"></div>

    <!-- Post Content -->
    <p>
        Hub est un outil en ligne de commande qui étend les fonctionnalités de Git pour interagir
        avec GitHub plus facilement. Par exemple :
    </p>
    <pre>
        <code>
 $ hub clone user/project</code>
    </pre>
    <p>
        Revient à écrire :
    </p>
    <pre>
        <code>
 $ git clone git://github.com/user/project.git</code>
    </pre>
    <p>
        Si vous souhaitez cloner un projet de votre propre repository, vous pouvez juste saisir :
    </p>
    <pre>
        <code>
 $ hub clone project</code>
    </pre>
    <p>
        Pour intégrer Hub à votre workflow, il vous suffit, une fois que vous l’avez installé, de créer
        un alias pour votre shell :
    </p>
    <pre>
        <code>
 $ alias git="hub"</code>
    </pre>
    <p>
        De la sorte, chaque fois que vous appelez Git, c’est Hub qui prend la main et vous offre ses
        fonctionnalités supplémentaires.
    </p>
    <p>
        Et si (comme moi), vous êtes très fainéants, vous pouvez aussi créer un alias pour la commande
        <code>git clone</code> :
    </p>
    <pre>
        <code>
 $  alias clone="git clone"</code>
    </pre>
    <p>
        Désormais, pour cloner un projet, au lieu
    </p>
    <ul>
        <li>d’ouvrir votre navigateur,</li>
        <li>d’aller sur GitHub,</li>
        <li>d’aller sur le bon repository,</li>
        <li>de cliquer sur le bouton cloner,</li>
        <li>de retourner dans votre terminal,</li>
        <li>de faire git clone <kbd>cmd</kbd> <kbd>v</kbd>,</li>
    </ul>
    <p>
        vous ferez simplement :
    </p>
    <pre>
        <code>
 $ clone project</code>
    </pre>
    <p>
        Il y a bien entendu beaucoup d’autres fonctionnalités intéressantes, comme la possibilité
        d’ouvrir directement la page du projet dans le navigateur depuis le terminal avec la commande
        <code>browse</code> (vous savez, au lieu d’ouvrir votre navigateur, d’aller sur GitHub,
        d’aller sur le bon repository, etc.).
    </p>
    <p>
        Je vous invite à regarder tout cela sur la page web du projet Hub.
    </p>
    <!-- /Post Content -->
</article>


