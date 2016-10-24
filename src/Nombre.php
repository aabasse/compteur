<?php
namespace Compteur;

class Nombre{

	const NBR_MIN = 0;
	const NBR_MAX = 100;

	/**
	 * Permet de savoir si un nombre est un multiple de 5.
	 * @param  $nbr : le nombre à tester.
	 * @return true si le nombre est un multiple de 5, false sinon.
	 */
	public static function estMultipleDeCinq($nbr)
	{
		return $nbr % 5 == 0;
	}

	/**
	 * Permet de savoir si un nombre est multiple de 3.
	 * @param  $nbr : le nombre à tester.
	 * @return  true si le nombre est un multiple de 5, false sinon.
	 */
	public static function estMultipleDeTrois($nbr)
	{
		return $nbr % 3 == 0;
	}

	/**
	 * @param  Affiche "invi" pour les multiples de 3, "vox" pour les multiples de 5, "invivox" pour les multiples de 3 et 5, le nombre 
	 *  dans les autres cas.
	 * @return string
	 */
	public static function afficher($nbr)
	{
		$nbrAafficher = '';
		$attributsHTML = ''; // attribus html pour différencier les nombre multiple dans la vue

		if(Nombre::estMultipleDeTrois($nbr) )
		{
			$nbrAafficher .= 'invi';
		}

		if(Nombre::estMultipleDeCinq($nbr) )
		{
			$nbrAafficher .= 'vox';
		}

		if($nbrAafficher != '')
		{
			// dans le cas ou c'est un multiple
			$attributsHTML = 'title="'.$nbr.'" class="multiple"';
		}
		else
		{
			$nbrAafficher = $nbr;
		}
		echo '<span '.$attributsHTML.' >'.$nbrAafficher.'</span>';
	}
}