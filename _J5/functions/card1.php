<?php




class produit {
    function __construct(string $produit, string $description, int $prix, string $image)
    

    {
        $this->produit = $produit;
        $this->description = $description;
        $this->prix = $prix;
        $this->image = $image;
        $this->HTML = 
        '<div>  

        <img src="'.$image.'"></img>
                <div> 
                <p>' .$produit.'</p> 
                </div>
                <div>
                 <p>'.$description. '</p>
                  <p>'  .$prix. '</p>
                </div>
            </div>';
    }
    
    function afficher() {
        echo $this->HTML;
    }

}

?>