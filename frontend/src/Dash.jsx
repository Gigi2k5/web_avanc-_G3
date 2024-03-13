import React from 'react'
import "./Dash.css"

export default function Dash() {
  return (
    <div>
       <header>
       <img src="src/img/logo.jpg" alt="Logo" width="75px" height="70px"/>
       <nav><a href="#">Accueil</a>
            <a href="#">Connexion</a>
            <a href="#">Inscription</a>
            <a href="#">Délibération</a>
        </nav>
       </header>
       
        {/* <h2 id='i' > Résultats du trimestre...</h2> */}
        
        {/* <section>
        <p>Nom:  Matricule:</p>
        <p>Prénom:</p>
        <p>Effectif:</p>
        </section> */}

        <table id='sect'>
        <thead>
            <tr>
            <th>Matière</th>
            <th>Coefficient</th>
            <th>Note</th>
            <th>Devoir</th>
                
                
            <th>Moyenne</th>
            <th>Moyenne cumulative</th>
            <th>Mention</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>Matière 1</td>
            <td></td>
            <td><td> Note1</td><td></td></td>
            <td><td>1</td><td>2</td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            {/* {/* <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr> */}
            <tr> 
                <td>Matiere 2</td>
                <td></td>
                <td><td> </td><td> </td></td>
                <td><td> </td><td> </td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            <tr>
                <td>Matiere 3</td>
                <td></td>
                <td><td> </td><td> </td></td>
                <td><td> </td><td> </td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            <tr>
                <td>Matiere 4</td>
                <td></td>
                <td><td> </td><td> </td></td>
                <td><td> </td><td> </td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            <tr>
                <td>Matiere 5</td>
                <td></td>
                <td><td> </td><td> </td></td>
                <td><td> </td><td> </td> </td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            <tr>
                <td>Matiere 6</td>
                <td></td>
                <td><td> </td><td> </td></td>
                <td><td> </td><td> </td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            <tr>
                <td>Matiere 7</td>
                <td></td>
                <td><td> </td><td> </td></td>
                <td><td> </td><td> </td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            <tr>
                <td>Matiere 8</td>
                <td></td>
                <td><td> </td><td> </td></td>
                <td><td> </td><td> </td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            </tbody>
        </table>

        <p id='der'> <a className='moyenify' >Moyenne Générale:</a>  <a className='moyenify' > Rang:</a> <a className='moyenify' >Moyenne forte:</a> <a className='moyenify' >Moyenne faible:</a>
        <h2 id='dec'>ADMIS</h2>
        </p>
        
        <footer>
            Copyright@groupe3
        </footer>
    </div>
  )
}
