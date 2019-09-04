<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    DB::table('questions')->delete();
    DB::table('questions')->insert(array(
        array(
            'question_nb' => '0',
            'question' => 'Quels surnoms les mariés utilisent-ils entre eux?',
            'correct_answer_id' => '1',
            'answer_A' => 'Chou, chouchou, choupi, chouchichou',
            'answer_B' => 'Bou, boubou, boudi, boudibou',
            'answer_C' => 'Zaza et Nathnath',
            'answer_D' => 'Chérinet, chérinette',
        ),
        array(
            'question_nb' => '1',
            'question' => 'En moyenne, combien de litres d’eau Nathan consomme-t-il chaque jour?',
            'correct_answer_id' => '0',
            'answer_A' => '3 litres, dans la moyenne supérieure',
            'answer_B' => '1 litre, pourrait mieux faire',
            'answer_C' => 'Beaucoup trop, impossible de comptabiliser',
            'answer_D' => 'De l’eau? Il n’en boit pas!',
        ),
        array(
            'question_nb' => '2',
            'question' => 'Quelles langues Isabel a-t-elle apprises?',
            'correct_answer_id' => '1',
            'answer_A' => 'Espagnol, allemand, français, anglais, portugais, arménien',
            'answer_B' => 'Espagnol, allemand, français, anglais, suisse-allemand, italien, arabe',
            'answer_C' => 'Espagnol, allemand, français, anglais, suisse-allemand, mandarin',
            'answer_D' => 'Apprises? Pas besoin, elle maîtrise',
        ),
        array(
            'question_nb' => '3',
            'question' => 'Quel a été le premier diplôme obtenu par chacun des mariés?',
            'correct_answer_id' => '2',
            'answer_A' => 'CFC de dessinateur en génie civil avec maturité professionnelle et maturité gymnasiale bilingue, option espagnol',
            'answer_B' => 'CFC de dessinateur en bâtiments avec maturité professionnelle et maturité gymnasiale bilingue, option biologie',
            'answer_C' => 'CFC de dessinateur en bâtiments avec maturité professionnelle et maturité gymnasiale bilingue, option espagnol',
            'answer_D' => 'Diplôme du meilleur joueur de handball de la saison 2000/01 et de la meilleure danseuse de hip-hop 2007',
        ),
        array(
            'question_nb' => '4',
            'question' => 'Quel nom de famille ont-ils choisi pour leur couple maintenant qu’ils sont mari et femme?',
            'correct_answer_id' => '2',
            'answer_A' => 'Isabel et Nathan Boder',
            'answer_B' => 'Isabel et Nathan Zbinden',
            'answer_C' => 'Isabel Zbinden et Nathan Boder',
            'answer_D' => 'Isabel et Nathan Dupont',
        ),
        array(
            'question_nb' => '5',
            'question' => 'Où ont vécu les mariés?',
            'correct_answer_id' => '1',
            'answer_A' => 'Bienne, Val-de-Ruz, Orvin, Frinvillier, Fribourg, Kampala, Erevan',
            'answer_B' => 'Bienne, Val-de-Ruz, Orvin, Frinvillier, Lausanne, Fribourg, Kampala, Erevan',
            'answer_C' => 'Bienne, Val-de-Ruz, Lamboing, Frinvillier, Fribourg, Kampala, Erevan',
            'answer_D' => 'Impossible à retracer, parfois même sans domicile fixe',
        ),
        array(
            'question_nb' => '6',
            'question' => 'Quels étaient les noms de leurs premières poules, dont deux ont été décapitées?',
            'correct_answer_id' => '2',
            'answer_A' => 'Caipirinha, Duchesse, Adilette, Puma, Ibiza',
            'answer_B' => 'Sex on the beach, Queen, Converse, Patrick, Serge',
            'answer_C' => 'Mojito, Princesse, Birkenstock, (poule 4), (poule 5)',
            'answer_D' => 'Comme elles étaient toutes brunes, ils ne les reconnaissaient de toute façon pas',
        ),
        array(
            'question_nb' => '7',
            'question' => 'Combien de continents ont été conquis par les mariés (ensemble et en admettant qu’il en existe cinq)?',
            'correct_answer_id' => '1',
            'answer_A' => '3',
            'answer_B' => '4',
            'answer_C' => '5',
            'answer_D' => 'Tous, et ils sont même allés dans l’espace',
        ),
        array(
            'question_nb' => '8',
            'question' => 'Où les mariés partent-il en voyage de noce?',
            'correct_answer_id' => '2',
            'answer_A' => 'En bons écologistes, ils tracent un itinéraire à vélo',
            'answer_B' => 'Fins gourmets, ils suivent les traces de Gargantua',
            'answer_C' => 'Amateurs de vins, ils vont découvrir les cépages d’Afrique',
            'answer_D' => 'Entre la crise de TdH et les sociétés 3dm et Argon Studio à gérer, ils ne peuvent évidemment pas se permettre de prendre un mois de vacances',
        ),
        array(
            'question_nb' => '9',
            'question' => 'En quel lieu les mariés se sont-ils mis ensemble?',
            'correct_answer_id' => '1',
            'answer_A' => 'Logique, sur les bancs d’école, au collège de La Suze, à Bienne',
            'answer_B' => 'Cocasse, avec les copains du BCF, au chalet Caprice, à Bevaix',
            'answer_C' => 'Naturellement, lors d’une braderie biennoise, au BCF Stand, à Bienne',
            'answer_D' => 'Plus personne ne sait, malheureusement',
        ),
        array(
            'question_nb' => '10',
            'question' => 'Quel est le nom du premier chien de Nathan?',
            'correct_answer_id' => '0',
            'answer_A' => 'Jim',
            'answer_B' => 'Walty',
            'answer_C' => 'Indiana',
            'answer_D' => 'Cannelle',
        ),
        array(
            'question_nb' => '11',
            'question' => 'Quel est le premier voyage que les mariés ont réalisé ensemble?',
            'correct_answer_id' => '0',
            'answer_A' => 'Grisons. Déjà écolos, nos Boubous',
            'answer_B' => 'Sud de la France. Nathan revient aux sources',
            'answer_C' => 'Ouganda. Isabel était quelque peu nostalgique',
            'answer_D' => 'La Lune. Ils l’ont décrochée ensemble',
        ),
        array(
            'question_nb' => '12',
            'question' => 'Qui a visité le plus de pays?',
            'correct_answer_id' => '1',
            'answer_A' => 'Isabel, la globe-trop-chieuse',
            'answer_B' => 'Nathan, le surfeur porteur d’eau',
            'answer_C' => 'Aucun d’entre eux, ils se sont rendus dans le même nombre de pays',
            'answer_D' => 'La réponse est C',
        ),
        array(
            'question_nb' => '13',
            'question' => 'Quel sport inhabituel Nathan a-t-il pratiqué au Nicaragua?',
            'correct_answer_id' => '1',
            'answer_A' => 'Surf sur un dauphin, apprivoisé bien sûr',
            'answer_B' => 'Snowboard volcanique, farté sans couenne de lard',
            'answer_C' => 'Beachminton, il ne faut pas perdre la main',
            'answer_D' => 'Du paintball à balles réelles contre un sympathique gang local',
        ),
        array(
            'question_nb' => '14',
            'question' => 'Comment Nathan répare-t-il ses fixations de snowboard?',
            'correct_answer_id' => '2',
            'answer_A' => 'Avec des vis, pour que ça tienne',
            'answer_B' => 'Avec de la colle à bois, il lui en restait de sa dernière visite chez Hornbach',
            'answer_C' => 'Avec une ceinture, à défaut de mieux',
            'answer_D' => 'Pas besoin de réparer, c’est encore plus drôle avec un seul pied',
        ),
    ));
  }
}
