<?php

use Illuminate\Database\Seeder;

class CommunesTableSeeder extends Seeder
{
public function run()
	{
		\DB::table('communes')->truncate();
		// seeder table communes
			// phnom penh communes				
			  \DB::table('communes')->insert(['name_en' => 'Svay Pak','name_kh' => '','district_id'=>1]);
			  \DB::table('communes')->insert(['name_en' => 'Russey Keo','name_kh' => '','district_id'=>1]);
			  \DB::table('communes')->insert(['name_en' => 'Toul Sangke','name_kh' => '','district_id'=>1]);
			  \DB::table('communes')->insert(['name_en' => 'Kilometr Lek 6','name_kh' => '','district_id'=>1]);
			  \DB::table('communes')->insert(['name_en' => 'Chrang Chamreh 1','name_kh' => '','district_id'=>1]);
			  \DB::table('communes')->insert(['name_en' => 'Chrang Chamreh 2','name_kh' => '','district_id'=>1]);

			  \DB::table('communes')->insert(['name_en' => 'Krang Thnong','name_kh' => '','district_id'=>2]);
			  \DB::table('communes')->insert(['name_en' => 'Khmuonh','name_kh' => '','district_id'=>2]);
			  \DB::table('communes')->insert(['name_en' => 'Phnom Penh Thmei','name_kh' => '','district_id'=>2]);
				\DB::table('communes')->insert(['name_en' => 'Tuek Thla','name_kh' => '','district_id'=>2]);	
				\DB::table('communes')->insert(['name_en' => 'Obek Kaom','name_kh' => '','district_id'=>2]);	  

			  \DB::table('communes')->insert(['name_en' => 'Ovlaok','name_kh' => '','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Kamboul','name_kh' => '','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Kantaok','name_kh' => '','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Boeng Thum','name_kh' => '','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Phleung Chheh Roteh','name_kh' => '','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Chaom Chau','name_kh' => '','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Trapeang Krasang','name_kh' => '','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Kakab','name_kh' => '','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Samraong Kraom','name_kh' => '','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Snaor','name_kh' => '','district_id'=>3]);

			  \DB::table('communes')->insert(['name_en' => 'Bak Kheng','name_kh' => '','district_id'=>4]);
			  \DB::table('communes')->insert(['name_en' => 'Praek Leab','name_kh' => '','district_id'=>4]);
			  \DB::table('communes')->insert(['name_en' => 'Praek Ta Sek','name_kh' => '','district_id'=>4]);
			  \DB::table('communes')->insert(['name_en' => 'Chrouy Changvar','name_kh' => '','district_id'=>4]);
			  \DB::table('communes')->insert(['name_en' => 'Kaoh Dach','name_kh' => '','district_id'=>4]);

			  \DB::table('communes')->insert(['name_en' => 'Ponsang','name_kh' => '','district_id'=>5]);
			  \DB::table('communes')->insert(['name_en' => 'Kouk Roka','name_kh' => '','district_id'=>5]);
			  \DB::table('communes')->insert(['name_en' => 'Ponhea Pon','name_kh' => '','district_id'=>5]);
			  \DB::table('communes')->insert(['name_en' => 'Samraong','name_kh' => '','district_id'=>5]);
			  \DB::table('communes')->insert(['name_en' => 'Praek Phnov','name_kh' => '','district_id'=>5]);

			  \DB::table('communes')->insert(['name_en' => 'Veal Sbov','name_kh' => '','district_id'=>6]);
			  \DB::table('communes')->insert(['name_en' => 'Praek Aeng','name_kh' => '','district_id'=>6]);
			  \DB::table('communes')->insert(['name_en' => 'Chbar Ampov 1','name_kh' => '','district_id'=>6]);
			  \DB::table('communes')->insert(['name_en' => 'Chbar Ampov 2','name_kh' => '','district_id'=>6]);
			  \DB::table('communes')->insert(['name_en' => 'Nirouth','name_kh' => '','district_id'=>6]);
			  \DB::table('communes')->insert(['name_en' => 'Praek Pra','name_kh' => '','district_id'=>6]);
			  \DB::table('communes')->insert(['name_en' => 'Praek Thmei','name_kh' => '','district_id'=>6]);
			  \DB::table('communes')->insert(['name_en' => 'Kbal Kaoh','name_kh' => '','district_id'=>6]);

			// Daun Penh
			  \DB::table('communes')->insert(['name_en' => 'Psar Thmei1','name_kh' => '','district_id'=>7]);
			  \DB::table('communes')->insert(['name_en' => 'Psar Thmei2','name_kh' => '','district_id'=>7]);
			  \DB::table('communes')->insert(['name_en' => 'Psar Thmei3','name_kh' => '','district_id'=>7]);
			  \DB::table('communes')->insert(['name_en' => 'Boeung Reang','name_kh' => '','district_id'=>7]);
			  \DB::table('communes')->insert(['name_en' => 'Psar Kandal1','name_kh' => '','district_id'=>7]);
			  \DB::table('communes')->insert(['name_en' => 'Psar Kandal2','name_kh' => '','district_id'=>7]);
			  \DB::table('communes')->insert(['name_en' => 'Chaktomukh','name_kh' => '','district_id'=>7]);
			  \DB::table('communes')->insert(['name_en' => 'Chey Chumneah','name_kh' => '','district_id'=>7]);
			  \DB::table('communes')->insert(['name_en' => 'Psar Chas','name_kh' => '','district_id'=>7]);
			  \DB::table('communes')->insert(['name_en' => 'Srah Chork','name_kh' => '','district_id'=>7]);
			  \DB::table('communes')->insert(['name_en' => 'Vat Phnum','name_kh' => '','district_id'=>7]);

			// Prampir Makara
			 \DB::table('communes')->insert(['name_en' => 'O Reussei 1','name_kh' => '','district_id'=>8]);
			 \DB::table('communes')->insert(['name_en' => 'O Reussei 2','name_kh' => '','district_id'=>8]);
			 \DB::table('communes')->insert(['name_en' => 'O Reussei 3','name_kh' => '','district_id'=>8]);
			 \DB::table('communes')->insert(['name_en' => 'O Reussei 4','name_kh' => '','district_id'=>8]);
			 \DB::table('communes')->insert(['name_en' => 'Monorom','name_kh' => '','district_id'=>8]);
			 \DB::table('communes')->insert(['name_en' => 'Mittapheap','name_kh' => '','district_id'=>8]);
			 \DB::table('communes')->insert(['name_en' => 'Vealvong','name_kh' => '','district_id'=>8]);
			 \DB::table('communes')->insert(['name_en' => 'Beung Prolit','name_kh' => '','district_id'=>8]);

			// Toul Kork
			 \DB::table('communes')->insert(['name_en' => 'Psar Depot1','name_kh' => '','district_id'=>9]);
			 \DB::table('communes')->insert(['name_en' => 'Psar Depot2','name_kh' => '','district_id'=>9]);
			 \DB::table('communes')->insert(['name_en' => 'Psar Depot3','name_kh' => '','district_id'=>9]);
			 \DB::table('communes')->insert(['name_en' => 'Teuk Laork1','name_kh' => '','district_id'=>9]);
			 \DB::table('communes')->insert(['name_en' => 'Teuk Laork2','name_kh' => '','district_id'=>9]);
			 \DB::table('communes')->insert(['name_en' => 'Teuk Laork3','name_kh' => '','district_id'=>9]);
			 \DB::table('communes')->insert(['name_en' => 'Beung Kok1','name_kh' => '','district_id'=>9]);
			 \DB::table('communes')->insert(['name_en' => 'Beung Kok2','name_kh' => '','district_id'=>9]);
			 \DB::table('communes')->insert(['name_en' => 'Psar Deumkor','name_kh' => '','district_id'=>9]);
			 \DB::table('communes')->insert(['name_en' => 'Beung Salang','name_kh' => '','district_id'=>9]);

			// Dangkor
			 \DB::table('communes')->insert(['name_en' => 'Dangkor','name_kh' => '','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Prey Sa','name_kh' => '','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Cheung Aek','name_kh' => '','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Spean Thma','name_kh' => '','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Prey Vaeng','name_kh' => '','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Pong Tuek','name_kh' => '','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Prateah Lang','name_kh' => '','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Sak Sampov','name_kh' => '','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Krang Pongro','name_kh' => '','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Kong Noy','name_kh' => '','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Tien','name_kh' => '','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Praek Kampues','name_kh' => '','district_id'=>10]);

			// Meanchey
			 \DB::table('communes')->insert(['name_en' => 'Stung Meanchey','name_kh' => '','district_id'=>11]);
			 \DB::table('communes')->insert(['name_en' => 'Boeng Tompun','name_kh' => '','district_id'=>11]);
			 \DB::table('communes')->insert(['name_en' => 'Chak Angrae Leu','name_kh' => '','district_id'=>11]);
			 \DB::table('communes')->insert(['name_en' => 'Chak Angrae Kroam','name_kh' => '','district_id'=>11]);

			// Chamkar mon
			 \DB::table('communes')->insert(['name_en' => 'Tonle Bassac','name_kh' => '','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Beung Kengkang1','name_kh' => '','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Beung Kengkang2','name_kh' => '','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Beung Kengkang3','name_kh' => '','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Olympic','name_kh' => '','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Toul Svayprey1','name_kh' => '','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Toul Svayprey2','name_kh' => '','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Tomnub Teuk','name_kh' => '','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Toul Tompung1','name_kh' => '','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Toul Tompung2','name_kh' => '','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Beung Trabaek','name_kh' => '','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Psar Deumtkov','name_kh' => '','district_id'=>12]);

			// Shihanouk Ville
			 \DB::table('communes')->insert(['name_en' => 'Sangkat 1','name_kh' => '','district_id'=>13]);
			 \DB::table('communes')->insert(['name_en' => 'Sangkat 2','name_kh' => '','district_id'=>13]);
			 \DB::table('communes')->insert(['name_en' => 'Sangkat 3','name_kh' => '','district_id'=>13]);
			 \DB::table('communes')->insert(['name_en' => 'Sangkat 4','name_kh' => '','district_id'=>13]);
			 \DB::table('communes')->insert(['name_en' => 'Koh Rong','name_kh' => '','district_id'=>13]);

			// Prey Nob
			 \DB::table('communes')->insert(['name_en' => 'Andong Thmar','name_kh' => '','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Beung Taprum','name_kh' => '','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Bet Trang','name_kh' => '','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Cheung Koar','name_kh' => '','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Ou Chrov','name_kh' => '','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Ou Oknha Heng','name_kh' => '','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Prey Nob','name_kh' => '','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Ream','name_kh' => '','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Sammaki','name_kh' => '','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Somrong','name_kh' => '','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Teuk Laork','name_kh' => '','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Teuk Tla','name_kh' => '','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Toul Toteung','name_kh' => '','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Veal Rinh','name_kh' => '','district_id'=>14]);

			// Stueng Hav Chey
			 \DB::table('communes')->insert(['name_en' => 'Kompenh','name_kh' => '','district_id'=>15]);
			 \DB::table('communes')->insert(['name_en' => 'Ou Treh','name_kh' => '','district_id'=>15]);
			 \DB::table('communes')->insert(['name_en' => 'Tomnob Rolork','name_kh' => '','district_id'=>15]);
			 \DB::table('communes')->insert(['name_en' => 'Keo Phos','name_kh' => '','district_id'=>15]);
			 
			// Kompong Seila
			 \DB::table('communes')->insert(['name_en' => 'Chomkar Loung','name_kh' => '','district_id'=>16]);
			 \DB::table('communes')->insert(['name_en' => 'Kampong Seila','name_kh' => '','district_id'=>16]);
			 \DB::table('communes')->insert(['name_en' => 'Ou Bak Roteh','name_kh' => '','district_id'=>16]);
			 \DB::table('communes')->insert(['name_en' => 'Steung Chhay','name_kh' => '','district_id'=>16]);
		
		// Krong Kampong Cham		 
			// Krong Kampong Cham
			 \DB::table('communes')->insert(['name_en' => 'Boeng Kok','name_kh' => '','district_id'=>17]);
			 \DB::table('communes')->insert(['name_en' => 'Kampong Cham','name_kh' => '','district_id'=>17]);
			 \DB::table('communes')->insert(['name_en' => 'Sambuor Meas','name_kh' => '','district_id'=>17]);
			 \DB::table('communes')->insert(['name_en' => 'Veal Vong','name_kh' => '','district_id'=>17]);

			// Kampong Siem
			 \DB::table('communes')->insert(['name_en' => 'Ampil','name_kh' => '','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Hann Chey','name_kh' => '','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Kien Chrey','name_kh' => '','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Kokor','name_kh' => '','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Kaoh Mitt','name_kh' => '','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Kaoh Roka','name_kh' => '','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Kaoh Samraong','name_kh' => '','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Kaoh Tontuem','name_kh' => '','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Krala','name_kh' => '','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Ou Svay','name_kh' => '','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Ro any','name_kh' => '','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Rumchek','name_kh' => '','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Srak','name_kh' => '','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Trean','name_kh' => '','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Vihear Thum','name_kh' => '','district_id'=>18]);

			// KangMeas
			 \DB::table('communes')->insert(['name_en' => 'Angkor Ban','name_kh' => '','district_id'=>19]);
			 \DB::table('communes')->insert(['name_en' => 'Kong Taneung','name_kh' => '','district_id'=>19]);
			 \DB::table('communes')->insert(['name_en' => 'Khchau','name_kh' => '','district_id'=>19]);
			 \DB::table('communes')->insert(['name_en' => 'Peam Chikong','name_kh' => '','district_id'=>19]);
			 \DB::table('communes')->insert(['name_en' => 'Prek Koy','name_kh' => '','district_id'=>19]);
			 \DB::table('communes')->insert(['name_en' => 'Prek Krabau','name_kh' => '','district_id'=>19]);
			 \DB::table('communes')->insert(['name_en' => 'Reay Pay','name_kh' => '','district_id'=>19]);
			 \DB::table('communes')->insert(['name_en' => 'Roka-a','name_kh' => '','district_id'=>19]);
			 \DB::table('communes')->insert(['name_en' => 'Roka-koy','name_kh' => '','district_id'=>19]);
			 \DB::table('communes')->insert(['name_en' => 'Sdau','name_kh' => '','district_id'=>19]);
			 \DB::table('communes')->insert(['name_en' => 'Sor Korng','name_kh' => '','district_id'=>19]);

			// Kaoh Soutin
			 \DB::table('communes')->insert(['name_en' => 'Kampong Reab','name_kh' => '','district_id'=>20]);
			 \DB::table('communes')->insert(['name_en' => 'Koh Sotin','name_kh' => '','district_id'=>20]);
			 \DB::table('communes')->insert(['name_en' => 'Tve','name_kh' => '','district_id'=>20]);
			 \DB::table('communes')->insert(['name_en' => 'Mohaleap','name_kh' => '','district_id'=>20]);
			 \DB::table('communes')->insert(['name_en' => 'Moha Knhoung','name_kh' => '','district_id'=>20]);
			 \DB::table('communes')->insert(['name_en' => 'Peam Brothnous','name_kh' => '','district_id'=>20]);
			 \DB::table('communes')->insert(['name_en' => 'Pongro','name_kh' => '','district_id'=>20]);
			 \DB::table('communes')->insert(['name_en' => 'Prek Tanung','name_kh' => '','district_id'=>20]);
			
			// Prey Chhor
			 \DB::table('communes')->insert(['name_en' => 'Baray','name_kh' => '','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Beung Nay','name_kh' => '','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Chrey Vean','name_kh' => '','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Mean','name_kh' => '','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Trapeang Preah','name_kh' => '','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Khvet Thum','name_kh' => '','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Kor','name_kh' => '','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Krouch','name_kh' => '','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Lvea','name_kh' => '','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Prey Chor','name_kh' => '','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Sor Sen','name_kh' => '','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Somrorng','name_kh' => '','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Sro Ngae','name_kh' => '','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Thma Poun','name_kh' => '','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Tong Rong','name_kh' => '','district_id'=>21]);

			// Srey Santhor
			 \DB::table('communes')->insert(['name_en' => 'Baray','name_kh' => '','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Chibal','name_kh' => '','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Khnar Sor','name_kh' => '','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Koh Andet','name_kh' => '','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Mean Chey','name_kh' => '','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Phteas Kandal','name_kh' => '','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Bram Yam','name_kh' => '','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Prek Dombok','name_kh' => '','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Prek Por','name_kh' => '','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Prek Romdeng','name_kh' => '','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Russey Srok','name_kh' => '','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Svay Por','name_kh' => '','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Svay Ksach Phnom','name_kh' => '','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Torng Trolach','name_kh' => '','district_id'=>22]);

			// Stueng Trang
			 \DB::table('communes')->insert(['name_en' => 'Areak Tnort','name_kh' => '','district_id'=>23]);
			 \DB::table('communes')->insert(['name_en' => 'Dorng Kdar','name_kh' => '','district_id'=>23]);
			 \DB::table('communes')->insert(['name_en' => 'Kpob Tangoun','name_kh' => '','district_id'=>23]);
			 \DB::table('communes')->insert(['name_en' => 'Mesar Chrey','name_kh' => '','district_id'=>23]);
			 \DB::table('communes')->insert(['name_en' => 'Or Mlou','name_kh' => '','district_id'=>23]);
			 \DB::table('communes')->insert(['name_en' => 'Peam Koh Sna','name_kh' => '','district_id'=>23]);
			 \DB::table('communes')->insert(['name_en' => 'Preah Andong','name_kh' => '','district_id'=>23]);
			 \DB::table('communes')->insert(['name_en' => 'Prek Kork','name_kh' => '','district_id'=>23]);
			 \DB::table('communes')->insert(['name_en' => 'Sopheas','name_kh' => '','district_id'=>23]);
			 \DB::table('communes')->insert(['name_en' => 'Toul Preahkhleang','name_kh' => '','district_id'=>23]);
			 \DB::table('communes')->insert(['name_en' => 'Toul Sombor','name_kh' => '','district_id'=>23]);

			// Batheay
			 \DB::table('communes')->insert(['name_en' => 'Batheay','name_kh' => '','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Chbar Ampov','name_kh' => '','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Chealea','name_kh' => '','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Cheung Prey','name_kh' => '','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Me Pring','name_kh' => '','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Phav','name_kh' => '','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Sambour','name_kh' => '','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Sandaek','name_kh' => '','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Tang Krang','name_kh' => '','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Prasat','name_kh' => '','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Tang Krasang','name_kh' => '','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Trab Roung','name_kh' => '','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Tumnob','name_kh' => '','district_id'=>24]);

			// Chamkar Leu
			 \DB::table('communes')->insert(['name_en' => 'Bos Khnaor','name_kh' => '','district_id'=>25]);
			 \DB::table('communes')->insert(['name_en' => 'Chamkar Andoung','name_kh' => '','district_id'=>25]);
			 \DB::table('communes')->insert(['name_en' => 'Cheyyou','name_kh' => '','district_id'=>25]);
			 \DB::table('communes')->insert(['name_en' => 'Lvea Leu','name_kh' => '','district_id'=>25]);
			 \DB::table('communes')->insert(['name_en' => 'Spueu','name_kh' => '','district_id'=>25]);
			 \DB::table('communes')->insert(['name_en' => 'Svay Teab','name_kh' => '','district_id'=>25]);
			 \DB::table('communes')->insert(['name_en' => 'Ta Ong','name_kh' => '','district_id'=>25]);
			 \DB::table('communes')->insert(['name_en' => 'Ta Prok','name_kh' => '','district_id'=>25]);

			// Cheung Prey 
			 \DB::table('communes')->insert(['name_en' => 'Khnaor Dambang','name_kh' => '','district_id'=>26]);
			 \DB::table('communes')->insert(['name_en' => 'Kouk Rovieng','name_kh' => '','district_id'=>26]);
			 \DB::table('communes')->insert(['name_en' => 'Phdau Chum','name_kh' => '','district_id'=>26]);
			 \DB::table('communes')->insert(['name_en' => 'Prey Char','name_kh' => '','district_id'=>26]);
			 \DB::table('communes')->insert(['name_en' => 'Pring Chrum','name_kh' => '','district_id'=>26]);
			 \DB::table('communes')->insert(['name_en' => 'Sampong Chey','name_kh' => '','district_id'=>26]);
			 \DB::table('communes')->insert(['name_en' => 'Sdaeung Chey','name_kh' => '','district_id'=>26]);
			 \DB::table('communes')->insert(['name_en' => 'Soutip','name_kh' => '','district_id'=>26]);
			 \DB::table('communes')->insert(['name_en' => 'Srama','name_kh' => '','district_id'=>26]);
			 \DB::table('communes')->insert(['name_en' => 'Trapeang Kor','name_kh' => '','district_id'=>26]);

		// Siem Reap communes
			// Angkor Chum
			  \DB::table('communes')->insert(['name_en' => 'Char Chhouk','name_kh' => 'ចារឈូក','district_id'=>27]);
				\DB::table('communes')->insert(['name_en' => 'Daun Peng','name_kh' => 'ដូនពេង','district_id'=>27]);
				\DB::table('communes')->insert(['name_en' => 'Koak Daung','name_kh' => 'គោកដូង','district_id'=>27]);				
				\DB::table('communes')->insert(['name_en' => 'Koal','name_kh' => 'គោល','district_id'=>27]);
				\DB::table('communes')->insert(['name_en' => 'Nokor Pheas','name_kh' => 'នគរភាស','district_id'=>27]);
				\DB::table('communes')->insert(['name_en' => 'Srae Khvav','name_kh' => 'ស្រែខ្វាវ','district_id'=>27]);
				\DB::table('communes')->insert(['name_en' => 'Tasoam','name_kh' => 'តាសោម','district_id'=>27]);
			// Angkor Thom						
				\DB::table('communes')->insert(['name_en' => 'Chub Tatrav','name_kh' => 'ជប់តាត្រាវ','district_id'=>28]);
				\DB::table('communes')->insert(['name_en' => 'Leang Dai','name_kh' => 'លាងដៃ','district_id'=>28]);
				\DB::table('communes')->insert(['name_en' => 'Peak Snaeng','name_kh' => 'ពាក់ស្នែង','district_id'=>28]);
				\DB::table('communes')->insert(['name_en' => 'Svay Chek','name_kh' => 'ស្វាយចេក','district_id'=>28]);
			// Banteay Srey								
				\DB::table('communes')->insert(['name_en' => 'Khnar Sanday','name_kh' => 'ខ្នារសណ្តាយ','district_id'=>29]);
				\DB::table('communes')->insert(['name_en' => 'Khun Ream','name_kh' => 'ឃុនរាម','district_id'=>29]);
				\DB::table('communes')->insert(['name_en' => 'Preak Dak','name_kh' => 'ព្រះដាក់','district_id'=>29]);
				\DB::table('communes')->insert(['name_en' => 'Romchek','name_kh' => 'រំចេក','district_id'=>29]);
				\DB::table('communes')->insert(['name_en' => 'Run Ta Aek','name_kh' => 'រុនតាឯក','district_id'=>29]);
				\DB::table('communes')->insert(['name_en' => 'Tbaeng','name_kh' => 'ត្បែង','district_id'=>29]);
			// Chi Kraeng
				\DB::table('communes')->insert(['name_en' => 'Anlong Samnor','name_kh' => 'អន្លង់សំណរ','district_id'=>30]);
				\DB::table('communes')->insert(['name_en' => 'Chi Kraeng','name_kh' => 'ជីក្រែង','district_id'=>30]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Kdei','name_kh' => 'កំពង់ក្តី','district_id'=>30]);
				\DB::table('communes')->insert(['name_en' => 'Khvav','name_kh' => 'ខ្វាវ','district_id'=>30]);
				\DB::table('communes')->insert(['name_en' => 'Koak Thlok Krom','name_kh' => 'គោកធ្លកក្រោម','district_id'=>30]);
				\DB::table('communes')->insert(['name_en' => 'Koak Thlok Leu','name_kh' => 'គោកធ្លកលើ','district_id'=>30]);
				\DB::table('communes')->insert(['name_en' => 'Lveng Russei','name_kh' => 'ល្វែងឫស្សី','district_id'=>30]);
				\DB::table('communes')->insert(['name_en' => 'Pongro Krom','name_kh' => 'ពង្រក្រោម','district_id'=>30]);
				\DB::table('communes')->insert(['name_en' => 'Pongro Leu','name_kh' => 'ពង្រលើ','district_id'=>30]);
				\DB::table('communes')->insert(['name_en' => 'Russei Lok','name_kh' => 'ឫស្សីលក','district_id'=>30]);
				\DB::table('communes')->insert(['name_en' => 'Songveuy','name_kh' => 'សង្វើយ','district_id'=>30]);
				\DB::table('communes')->insert(['name_en' => 'Spean Tnoat','name_kh' => 'ស្ពានត្នោត','district_id'=>30]);																
			// Kralanh	
				\DB::table('communes')->insert(['name_en' => 'Chonleas Dai','name_kh' => 'ជន្លាស់ដៃ','district_id'=>31]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Thkov','name_kh' => 'កំពង់ថ្កូវ','district_id'=>31]);
				\DB::table('communes')->insert(['name_en' => 'Kralanh','name_kh' => 'ក្រឡាញ់','district_id'=>31]);
				\DB::table('communes')->insert(['name_en' => 'Krouch Kor','name_kh' => 'ក្រូចគរ','district_id'=>31]);
				\DB::table('communes')->insert(['name_en' => 'Roang Koar','name_kh' => 'រោងគោ','district_id'=>31]);
				\DB::table('communes')->insert(['name_en' => 'Sambour','name_kh' => 'សំបួរ','district_id'=>31]);
				\DB::table('communes')->insert(['name_en' => 'Sen Sok','name_kh' => 'សែនសុខ','district_id'=>31]);
				\DB::table('communes')->insert(['name_en' => 'Snoul','name_kh' => 'ស្នួល','district_id'=>31]);
				\DB::table('communes')->insert(['name_en' => 'Sronal','name_kh' => 'ស្រណាល','district_id'=>31]);
				\DB::table('communes')->insert(['name_en' => 'Ta An','name_kh' => 'តាអាន','district_id'=>31]);
			// Pouk
				\DB::table('communes')->insert(['name_en' => 'Sosor Sdom','name_kh' => 'សសរស្តម្','district_id'=>32]);
				\DB::table('communes')->insert(['name_en' => 'Daun Keo','name_kh' => 'ដូនកែវ','district_id'=>32]);
				\DB::table('communes')->insert(['name_en' => 'Kdei Run','name_kh' => 'ក្តីរុន','district_id'=>32]);
				\DB::table('communes')->insert(['name_en' => 'Keo Por','name_kh' => 'កែវពណ៌','district_id'=>32]);
				\DB::table('communes')->insert(['name_en' => 'Khnat','name_kh' => 'ខ្នាត','district_id'=>32]);
				\DB::table('communes')->insert(['name_en' => 'Lvea','name_kh' => 'ល្វា','district_id'=>32]);
				\DB::table('communes')->insert(['name_en' => 'Mukh Paen','name_kh' => 'មុខប៉ែន','district_id'=>32]);
				\DB::table('communes')->insert(['name_en' => 'Pou Treay','name_kh' => 'ពោធិទ្រាយ','district_id'=>32]);
				\DB::table('communes')->insert(['name_en' => 'Pouk','name_kh' => 'ពួក','district_id'=>32]);
				\DB::table('communes')->insert(['name_en' => 'Prey Chrouk','name_kh' => 'ព្រៃជ្រូក','district_id'=>32]);
				\DB::table('communes')->insert(['name_en' => 'Reul','name_kh' => 'រើស','district_id'=>32]);
				\DB::table('communes')->insert(['name_en' => 'Somroang Yea','name_kh' => 'សំរោងយា','district_id'=>32]);
				\DB::table('communes')->insert(['name_en' => 'Treu Nhoar','name_kh' => 'ត្រីញ័រ','district_id'=>32]);
				\DB::table('communes')->insert(['name_en' => 'Yeang','name_kh' => 'យាង','district_id'=>32]);
				\DB::table('communes')->insert(['name_en' => 'Tuek Vil','name_kh' => 'ទឹកវិល','district_id'=>32]);
				\DB::table('communes')->insert(['name_en' => 'Krabei Riel','name_kh' => 'ក្របីរៀល','district_id'=>32]);

			// Prasat Bakong
				\DB::table('communes')->insert(['name_en' => 'Bakong','name_kh' => 'បាគង','district_id'=>33]);
				\DB::table('communes')->insert(['name_en' => 'Balangk','name_kh' => 'បល្ល័ង្គ','district_id'=>33]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Phluk','name_kh' => 'កំពង់ភ្លុក','district_id'=>33]);
				\DB::table('communes')->insert(['name_en' => 'Kantreang','name_kh' => 'កន្ទ្រាំង','district_id'=>33]);
				\DB::table('communes')->insert(['name_en' => 'Kandaek','name_kh' => 'កណ្តែក','district_id'=>33]);
				\DB::table('communes')->insert(['name_en' => 'Meanchey','name_kh' => 'មានជ័យ','district_id'=>33]);
				\DB::table('communes')->insert(['name_en' => 'Rolous','name_kh' => 'រលួស','district_id'=>33]);
				\DB::table('communes')->insert(['name_en' => 'Trapeang Thom','name_kh' => 'ត្រពាំងធំ','district_id'=>33]);
				\DB::table('communes')->insert(['name_en' => 'Ampil','name_kh' => 'អំពិល','district_id'=>33]);

			// Krong Siem Reap
				\DB::table('communes')->insert(['name_en' => 'Slor Kram','name_kh' => 'ស្លក្រាម','district_id'=>34]);
				\DB::table('communes')->insert(['name_en' => 'Svay Dongkum','name_kh' => 'ស្វាយដង្គំ','district_id'=>34]);
				\DB::table('communes')->insert(['name_en' => 'Koak Chork','name_kh' => 'គោកចក','district_id'=>34]);
				\DB::table('communes')->insert(['name_en' => 'Sala Komreuk','name_kh' => 'សាលាកំរើក','district_id'=>34]);
				\DB::table('communes')->insert(['name_en' => 'Nokor Thom','name_kh' => 'នគរធំ','district_id'=>34]);
				\DB::table('communes')->insert(['name_en' => 'Chreav','name_kh' => 'ជ្រាវ','district_id'=>34]);
				\DB::table('communes')->insert(['name_en' => 'Chong Khneas','name_kh' => 'ចុងឃ្នៀស','district_id'=>34]);
				\DB::table('communes')->insert(['name_en' => 'Sambour','name_kh' => 'សំបួរ','district_id'=>34]);
				\DB::table('communes')->insert(['name_en' => 'Seam Reap','name_kh' => 'សៀមរាប','district_id'=>34]);
				\DB::table('communes')->insert(['name_en' => 'Sragnae','name_kh' => 'ស្រង៉ែ','district_id'=>34]);
				\DB::table('communes')->insert(['name_en' => 'Ampil','name_kh' => 'អំពិល','district_id'=>34]);
				\DB::table('communes')->insert(['name_en' => 'Krabei Real','name_kh' => 'ក្របីរៀល','district_id'=>34]);
				\DB::table('communes')->insert(['name_en' => 'Teuk Vil','name_kh' => 'ទឹកវិល','district_id'=>34]);

			// Sout Nikom
				\DB::table('communes')->insert(['name_en' => 'Chan Sor','name_kh' => 'ចាន់ស','district_id'=>35]);
				\DB::table('communes')->insert(['name_en' => 'Dom Daek','name_kh' => 'ដំដែក','district_id'=>35]);
				\DB::table('communes')->insert(['name_en' => 'Danrun','name_kh' => 'ដានរុន','district_id'=>35]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Khleang','name_kh' => 'កំពង់ឃ្លាំង','district_id'=>35]);
				\DB::table('communes')->insert(['name_en' => 'Kean Sangke','name_kh' => 'កៀនសង្កែ','district_id'=>35]);
				\DB::table('communes')->insert(['name_en' => 'Khchas','name_kh' => 'ខ្ចាស់','district_id'=>35]);
				\DB::table('communes')->insert(['name_en' => 'Khnar Pou','name_kh' => 'ខ្នារពោធិ៍','district_id'=>35]);
				\DB::table('communes')->insert(['name_en' => 'Popel','name_kh' => 'ពពេល','district_id'=>35]);
				\DB::table('communes')->insert(['name_en' => 'Samroang','name_kh' => 'សំរោង','district_id'=>35]);
				\DB::table('communes')->insert(['name_en' => 'Ta Yaek','name_kh' => 'តាយ៉ែក','district_id'=>35]);

			// Srei Snam
				\DB::table('communes')->insert(['name_en' => 'Chroy Neang Ngoun','name_kh' => 'ជ្រោយនាងងួន','district_id'=>36]);
				\DB::table('communes')->insert(['name_en' => 'Klang Hay','name_kh' => 'ក្លាំងហាយ','district_id'=>36]);
				\DB::table('communes')->insert(['name_en' => 'Tram Sosor','name_kh' => 'ត្រាំសសរ','district_id'=>36]);
				\DB::table('communes')->insert(['name_en' => 'Moang','name_kh' => 'មោង','district_id'=>36]);
				\DB::table('communes')->insert(['name_en' => 'Brey','name_kh' => 'ប្រីយ៍','district_id'=>36]);
				\DB::table('communes')->insert(['name_en' => 'Slaeng Spean','name_kh' => 'ស្លែងស្ពាន','district_id'=>36]);

			// Svay Leu
				\DB::table('communes')->insert(['name_en' => 'Beung Mealea','name_kh' => 'បឹងមាលា','district_id'=>37]);
				\DB::table('communes')->insert(['name_en' => 'Kantout','name_kh' => 'កន្ទួត','district_id'=>37]);
				\DB::table('communes')->insert(['name_en' => 'Khnorng Phnum','name_kh' => 'ខ្នងភ្នំ','district_id'=>37]);
				\DB::table('communes')->insert(['name_en' => 'Svay Leu','name_kh' => 'ស្វាយលើ','district_id'=>37]);
				\DB::table('communes')->insert(['name_en' => 'Ta Seam','name_kh' => 'តាសៀម','district_id'=>37]);

			// Varin	
				\DB::table('communes')->insert(['name_en' => 'Brasat','name_kh' => 'ប្រាសាទ','district_id'=>38]);
				\DB::table('communes')->insert(['name_en' => 'Lvea Krang','name_kh' => 'ល្វាក្រាំង','district_id'=>38]);
				\DB::table('communes')->insert(['name_en' => 'Srae Noy','name_kh' => 'ស្រែណូយ','district_id'=>38]);
				\DB::table('communes')->insert(['name_en' => 'Svay Sor','name_kh' => 'ស្វាយស','district_id'=>38]);
				\DB::table('communes')->insert(['name_en' => 'Varin','name_kh' => 'វ៉ារិន','district_id'=>38]);

		// Battambang communes
			// Banan		
				\DB::table('communes')->insert(['name_en' => 'Kantueu Muoy','name_kh' => 'កន្ទឺ ១','district_id'=>39]);
				\DB::table('communes')->insert(['name_en' => 'Kantueu Pir','name_kh' => 'កន្ទឺ ២','district_id'=>39]);
				\DB::table('communes')->insert(['name_en' => 'Bay Damram','name_kh' => 'បាយដំរាំ','district_id'=>39]);
				\DB::table('communes')->insert(['name_en' => 'Chheu Teal','name_kh' => '	ឈើទាល','district_id'=>39]);
				\DB::table('communes')->insert(['name_en' => 'Chaeng Mean Chey','name_kh' => 'ចែងមានជ័យ','district_id'=>39]);
				\DB::table('communes')->insert(['name_en' => 'Phnum Sampov','name_kh' => 'ភ្នំសំពៅ','district_id'=>39]);
				\DB::table('communes')->insert(['name_en' => 'Snoeng','name_kh' => 'ស្នឹង','district_id'=>39]);
				\DB::table('communes')->insert(['name_en' => 'Ta Kream','name_kh' => 'តាគ្រាម','district_id'=>39]);
			// Thma Koul
				\DB::table('communes')->insert(['name_en' => 'Ta Pung','name_kh' => 'តាពូង','district_id'=>40]);
				\DB::table('communes')->insert(['name_en' => 'តាម៉ឺន','name_kh' => 'Ta Meun','district_id'=>40]);
				\DB::table('communes')->insert(['name_en' => 'Ou Ta Ki','name_kh' => 'អូរតាគី','district_id'=>40]);
				\DB::table('communes')->insert(['name_en' => 'Chrey','name_kh' => 'ជ្រៃ','district_id'=>40]);
				\DB::table('communes')->insert(['name_en' => 'Anlong Run','name_kh' => 'អន្លង់រុន','district_id'=>40]);
				\DB::table('communes')->insert(['name_en' => 'Chrouy Sdau','name_kh' => 'ជ្រោយស្តៅ','district_id'=>40]);
				\DB::table('communes')->insert(['name_en' => 'Boeng Pring','name_kh' => 'បឹងព្រីង','district_id'=>40]);
				\DB::table('communes')->insert(['name_en' => 'Kouk Khmum','name_kh' => 'គោកឃ្មុំ','district_id'=>40]);
				\DB::table('communes')->insert(['name_en' => 'Bansay Traeng','name_kh' => 'បន្សាយត្រែង','district_id'=>40]);
				\DB::table('communes')->insert(['name_en' => 'Rung Chrey','name_kh' => 'រូងជ្រៃ','district_id'=>40]);
			// Krong Bat Dambang
				\DB::table('communes')->insert(['name_en' => 'Tuol Ta Aek','name_kh' => 'ទួលតាឯក','district_id'=>41]);
				\DB::table('communes')->insert(['name_en' => 'Preaek Preah Sdach','name_kh' => 'ព្រែកព្រះស្តេច','district_id'=>41]);
				\DB::table('communes')->insert(['name_en' => 'Rotanak','name_kh' => 'រតនៈ','district_id'=>41]);
				\DB::table('communes')->insert(['name_en' => 'Chamkar Samraong','name_kh' => 'ចំការសំរោង','district_id'=>41]);
				\DB::table('communes')->insert(['name_en' => 'Sla Kaet','name_kh' => 'ស្លាកែត','district_id'=>41]);
				\DB::table('communes')->insert(['name_en' => 'Kdol Doun Teav','name_kh' => 'ក្តុលដូនទាវ','district_id'=>41]);
				\DB::table('communes')->insert(['name_en' => 'Ou Mal','name_kh' => 'អូរម៉ាល់','district_id'=>41]);
				\DB::table('communes')->insert(['name_en' => 'Voat Kor','name_kh' => 'វត្តគរ','district_id'=>41]);
				\DB::table('communes')->insert(['name_en' => 'Ou Char','name_kh' => 'អូរចារ','district_id'=>41]);
				\DB::table('communes')->insert(['name_en' => 'Svay Pao','name_kh' => 'ស្វាយប៉ោ','district_id'=>41]);
			// Bavel
				\DB::table('communes')->insert(['name_en' => 'Bavel','name_kh' => 'បវេល','district_id'=>42]);
				\DB::table('communes')->insert(['name_en' => 'Khnach Romeas','name_kh' => 'ខ្នាចរមាស','district_id'=>42]);
				\DB::table('communes')->insert(['name_en' => 'Lvea','name_kh' => 'ល្វា','district_id'=>42]);
				\DB::table('communes')->insert(['name_en' => 'Prey Khpos','name_kh' => 'ព្រៃខ្ពស់','district_id'=>42]);
				\DB::table('communes')->insert(['name_en' => 'Ampil Pram Daeum','name_kh' => 'អំពិលប្រាំដើម','district_id'=>42]);
				\DB::table('communes')->insert(['name_en' => 'Kdol Tahen','name_kh' => 'ក្តុលតាហែន','district_id'=>42]);
				\DB::table('communes')->insert(['name_en' => 'Khlang meas','name_kh' => 'ខ្លាំងមាស','district_id'=>42]);
				\DB::table('communes')->insert(['name_en' => 'Boeng pram','name_kh' => 'បឹងប្រាំ','district_id'=>42]);
			// Aek Phnum
				\DB::table('communes')->insert(['name_en' => 'Preaek Norint','name_kh' => 'ព្រែកនរិន្ទ','district_id'=>43]);
				\DB::table('communes')->insert(['name_en' => 'Samraong Knong','name_kh' => 'សំរោងក្នុង','district_id'=>43]);
				\DB::table('communes')->insert(['name_en' => 'Preaek Khpob','name_kh' => 'ព្រែកខ្ពប','district_id'=>43]);
				\DB::table('communes')->insert(['name_en' => 'Preaek Luong','name_kh' => 'ព្រែកហ្លួង','district_id'=>43]);
				\DB::table('communes')->insert(['name_en' => 'Peam Aek','name_kh' => 'ពាមឯក','district_id'=>43]);
				\DB::table('communes')->insert(['name_en' => 'Prey Chas','name_kh' => 'ព្រៃចាស់','district_id'=>43]);
				\DB::table('communes')->insert(['name_en' => 'Kaoh Chiveang Thvang','name_kh' => 'កោះជីវាំង','district_id'=>43]);
			// Moung Ruessei
				\DB::table('communes')->insert(['name_en' => 'Moung','name_kh' => 'មោង','district_id'=>44]);
				\DB::table('communes')->insert(['name_en' => 'Kear','name_kh' => 'គារ','district_id'=>44]);
				\DB::table('communes')->insert(['name_en' => 'Prey Svay','name_kh' => 'ព្រៃស្វាយ','district_id'=>44]);
				\DB::table('communes')->insert(['name_en' => 'Ruessei Krang','name_kh' => 'ឫស្សីក្រាំង','district_id'=>44]);
				\DB::table('communes')->insert(['name_en' => 'Chrey','name_kh' => 'ជ្រៃ','district_id'=>44]);
				\DB::table('communes')->insert(['name_en' => 'Ta Loas','name_kh' => 'តាលាស់','district_id'=>44]);
				\DB::table('communes')->insert(['name_en' => 'Kakaoh','name_kh' => 'កកោះ','district_id'=>44]);
				\DB::table('communes')->insert(['name_en' => 'Prey Touch','name_kh' => 'ព្រៃតូច','district_id'=>44]);
				\DB::table('communes')->insert(['name_en' => 'Robas Mongkol','name_kh' => 'របស់មង្គល','district_id'=>44]);
				\DB::table('communes')->insert(['name_en' => 'Break Chek','name_kh' => 'ព្រែកជីក','district_id'=>44]);
				\DB::table('communes')->insert(['name_en' => 'Prey Trolach','name_kh' => 'ព្រៃត្រឡាច','district_id'=>44]);
			// Rotanak Mondol
				\DB::table('communes')->insert(['name_en' => 'Sdau','name_kh' => 'ស្តៅ','district_id'=>45]);
				\DB::table('communes')->insert(['name_en' => 'Andaeuk Haeb','name_kh' => 'អណ្តើកហែប','district_id'=>45]);
				\DB::table('communes')->insert(['name_en' => 'Phlov Meas','name_kh' => 'ផ្លូវមាស','district_id'=>45]);
				\DB::table('communes')->insert(['name_en' => 'Traeng','name_kh' => 'ត្រែង','district_id'=>45]);
				\DB::table('communes')->insert(['name_en' => 'Reaksmey Sangha','name_kh' => 'រស្មីសង្ហារ','district_id'=>45]);
			// Sang Kae
				\DB::table('communes')->insert(['name_en' => 'Anlong Vil','name_kh' => 'អន្លង់វិល','district_id'=>46]);
				\DB::table('communes')->insert(['name_en' => 'Norea','name_kh' => 'នរា','district_id'=>46]);
				\DB::table('communes')->insert(['name_en' => 'Ta Pon','name_kh' => 'តាប៉ុន','district_id'=>46]);
				\DB::table('communes')->insert(['name_en' => 'Roka','name_kh' => 'រកា','district_id'=>46]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Preah','name_kh' => 'កំពង់ព្រះ','district_id'=>46]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Prieng','name_kh' => 'កំពង់ព្រៀង','district_id'=>46]);
				\DB::table('communes')->insert(['name_en' => 'Reang Kesei','name_kh' => 'រាំងកេសី','district_id'=>46]);
				\DB::table('communes')->insert(['name_en' => 'Ou Dambang Muoy','name_kh' => 'អូរដំបង ១','district_id'=>46]);
				\DB::table('communes')->insert(['name_en' => 'Ou Dambang Pir','name_kh' => 'អូរដំបង ២','district_id'=>46]);
				\DB::table('communes')->insert(['name_en' => 'Vaot Ta Muem','name_kh' => 'វត្តតាមិម','district_id'=>46]);
			// Samlout
				\DB::table('communes')->insert(['name_en' => 'Ta Taok','name_kh' => 'តាតោក','district_id'=>47]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Lpou','name_kh' => 'កំពង់ល្ពៅ','district_id'=>47]);
				\DB::table('communes')->insert(['name_en' => 'Ou Samrel','name_kh' => 'អូរសំរិល','district_id'=>47]);
				\DB::table('communes')->insert(['name_en' => 'Sung','name_kh' => 'ស៊ុង','district_id'=>47]);
				\DB::table('communes')->insert(['name_en' => 'Samlout','name_kh' => 'សំឡូត','district_id'=>47]);
				\DB::table('communes')->insert(['name_en' => 'Mean Cheay','name_kh' => 'មានជ័យ','district_id'=>47]);
				\DB::table('communes')->insert(['name_en' => 'Ta Sanh','name_kh' => 'តាសាញ','district_id'=>47]);
			// Sampov Lun
				\DB::table('communes')->insert(['name_en' => 'Sampou Lun','name_kh' => 'សំពៅលូន','district_id'=>48]);
				\DB::table('communes')->insert(['name_en' => 'Angkor Ban','name_kh' => 'អង្គរបាន','district_id'=>48]);
				\DB::table('communes')->insert(['name_en' => 'Ta Sda','name_kh' => 'តាសា្ត','district_id'=>48]);
				\DB::table('communes')->insert(['name_en' => 'Santepheap','name_kh' => 'សន្តិភាព','district_id'=>48]);
				\DB::table('communes')->insert(['name_en' => 'Serei Maen Cheay','name_kh' => 'សិរីមានជ័យ','district_id'=>48]);
				\DB::table('communes')->insert(['name_en' => 'Chrey Sema','name_kh' => 'ជ្រៃសីមា','district_id'=>48]);
			// Pnum Proek
				\DB::table('communes')->insert(['name_en' => 'Phnum Proek','name_kh' => 'ភ្នំព្រឹក','district_id'=>49]);
				\DB::table('communes')->insert(['name_en' => 'Pech Chenda','name_kh' => 'ពេជ្រចិន្តា','district_id'=>49]);
				\DB::table('communes')->insert(['name_en' => 'Bou','name_kh' => 'បួរ','district_id'=>49]);
				\DB::table('communes')->insert(['name_en' => 'Barang Thleak','name_kh' => 'បារាំងធ្លាក់','district_id'=>49]);
				\DB::table('communes')->insert(['name_en' => 'Ou Rumduol','name_kh' => 'អូររំដួល','district_id'=>49]);
			// Kamrieng
				\DB::table('communes')->insert(['name_en' => 'Kamrieng','name_kh' => 'កំរៀង','district_id'=>50]);
				\DB::table('communes')->insert(['name_en' => 'Boeng Reang','name_kh' => 'បឹងរាំង','district_id'=>50]);
				\DB::table('communes')->insert(['name_en' => 'Ou Da','name_kh' => 'អូរដា','district_id'=>50]);
				\DB::table('communes')->insert(['name_en' => 'Trang','name_kh' => 'ត្រាង','district_id'=>50]);
				\DB::table('communes')->insert(['name_en' => 'Ta Saen','name_kh' => 'តាសែន','district_id'=>50]);
				\DB::table('communes')->insert(['name_en' => 'Ta Krai','name_kh' => 'តាក្រី','district_id'=>50]);
			// Koas Krala	
				\DB::table('communes')->insert(['name_en' => 'Thipakdei','name_kh' => 'ធិបតី','district_id'=>51]);
				\DB::table('communes')->insert(['name_en' => 'Koas Krala','name_kh' => 'គាស់ក្រឡ','district_id'=>51]);
				\DB::table('communes')->insert(['name_en' => 'Hab','name_kh' => 'ហប់','district_id'=>51]);
				\DB::table('communes')->insert(['name_en' => 'Preah Phos','name_kh' => 'ព្រះផុស','district_id'=>51]);
				\DB::table('communes')->insert(['name_en' => 'Doun Ba','name_kh' => 'ដូនបា','district_id'=>51]);
				\DB::table('communes')->insert(['name_en' => 'Chhnal Moan','name_kh' => 'ឆ្នាល់មាន់','district_id'=>51]);
			// Rukhakiry
				\DB::table('communes')->insert(['name_en' => 'Prek chik','name_kh' => 'ព្រែកជីក','district_id'=>52]);
				\DB::table('communes')->insert(['name_en' => 'prey trolach','name_kh' => 'ព្រៃត្រឡាច','district_id'=>52]);
				\DB::table('communes')->insert(['name_en' => 'Basak','name_kh' => 'បាសាក','district_id'=>52]);
				\DB::table('communes')->insert(['name_en' => 'Mukrea','name_kh' => 'មុគគ្រា','district_id'=>52]);
				\DB::table('communes')->insert(['name_en' => 'Sduk Provek','name_kh' => 'ស្តុកផ្រូវិក','district_id'=>52]);
				
	//Kandal
			// Kandal Stueng
				\DB::table('communes')->insert(['name_en' => 'Ampov Prey','name_kh' => 'អំពៅព្រៃ','district_id'=>53]);
				\DB::table('communes')->insert(['name_en' => 'Anlong Romiet','name_kh' => 'អន្លង់រមៀត','district_id'=>53]);
				\DB::table('communes')->insert(['name_en' => 'Barku','name_kh' => 'បាគូ','district_id'=>53]);
				\DB::table('communes')->insert(['name_en' => 'Boeng Khyang','name_kh' => 'បឹងខ្យាង','district_id'=>53]);
				\DB::table('communes')->insert(['name_en' => 'Cheung Kaeub','name_kh' => 'ជើងកើប','district_id'=>53]);
				\DB::table('communes')->insert(['name_en' => 'Daeum Rues','name_kh' => 'ដើមឫស','district_id'=>53]);
				\DB::table('communes')->insert(['name_en' => 'Kandaok','name_kh' => 'កណ្តោក','district_id'=>53]);
				\DB::table('communes')->insert(['name_en' => 'Thmei','name_kh' => 'ថ្មី','district_id'=>53]);
				\DB::table('communes')->insert(['name_en' => 'Kouk Trab','name_kh' => 'គោកត្រប់','district_id'=>53]);
				\DB::table('communes')->insert(['name_en' => 'Preah Putth','name_kh' => 'ព្រះពុទ្ធ','district_id'=>53]);
				\DB::table('communes')->insert(['name_en' => 'Preaek Roka','name_kh' => 'ព្រែករកា','district_id'=>53]);
				\DB::table('communes')->insert(['name_en' => 'Preaek Slaeng','name_kh' => 'ព្រែកស្លែង','district_id'=>53]);
				\DB::table('communes')->insert(['name_en' => 'Roka','name_kh' => 'រកា','district_id'=>53]);
				\DB::table('communes')->insert(['name_en' => 'Roleang Kaen','name_kh' => 'រលាំងកែន','district_id'=>53]);
				\DB::table('communes')->insert(['name_en' => 'Siem Reab','name_kh' => 'សៀមរាប','district_id'=>53]);
				\DB::table('communes')->insert(['name_en' => 'Tbaeng','name_kh' => 'ត្បែងទៀន','district_id'=>53]);
				\DB::table('communes')->insert(['name_en' => 'Trapeang Veaeng','name_kh' => 'ត្រពាំងវែង','district_id'=>53]);
				\DB::table('communes')->insert(['name_en' => 'Trea','name_kh' => 'ទ្រា','district_id'=>53]);

			//Kaoh Thum
				\DB::table('communes')->insert(['name_en' => 'Chheu Kmau', 'name_kh' => 'ឈើខ្មៅ', 'district_id' => 54]);
				\DB::table('communes')->insert(['name_en' => 'Chrouy Ta Kae', 'name_kh' => 'ជ្រោយតាកែវ', 'district_id' => 54]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Kong', 'name_kh' => 'កំពង់កុង', 'district_id' => 54]);
				\DB::table('communes')->insert(['name_en' => 'Kaoh Thum Ka', 'name_kh' => 'កោះធំ ក', 'district_id' => 54]);
				\DB::table('communes')->insert(['name_en' => 'Kaoh Thum Kha', 'name_kh' => 'កោះធំ ខ', 'district_id' => 54]);
				\DB::table('communes')->insert(['name_en' => 'Leuk Daek', 'name_kh' => 'លើកដែក', 'district_id' => 54]);
				\DB::table('communes')->insert(['name_en' => 'Pouthi Ban', 'name_kh' => 'ពោធិ៍បាន', 'district_id' => 54]);
				\DB::table('communes')->insert(['name_en' => 'Prea​ek Chrey', 'name_kh' => 'ព្រែកជ្រៃ', 'district_id' => 54]);
				\DB::table('communes')->insert(['name_en' => 'Preaek Sdei', 'name_kh' => 'ព្រែកស្ដី', 'district_id' => 54]);
				\DB::table('communes')->insert(['name_en' => 'Preaek Thmei', 'name_kh' => 'ព្រែកថ្មី', 'district_id' => 54]);
				\DB::table('communes')->insert(['name_en' => 'Sampeou Poun', 'name_kh' => 'សំពៅពូន', 'district_id' => 54]);
			//Mukh Kampul
				\DB::table('communes')->insert(['name_en' => 'Praek Anchanh', 'name_kh' => 'ព្រែកអញ្ចាញ', 'district_id' => 55]);
				\DB::table('communes')->insert(['name_en' => 'Praek Dombong', 'name_kh' => 'ព្រែកដំបង', 'district_id' => 55]);
				\DB::table('communes')->insert(['name_en' => 'Rokakoang Ti Mouy', 'name_kh' => 'រកាកោងទី១', 'district_id' => 55]);
				\DB::table('communes')->insert(['name_en' => 'Rokakoang Ti Pir', 'name_kh' => 'រកាកោងទី២', 'district_id' => 55]);
				\DB::table('communes')->insert(['name_en' => 'Russei Chroay', 'name_kh' => 'ឫស្សីជ្រោយ', 'district_id' => 55]);
				\DB::table('communes')->insert(['name_en' => 'Sambour Meas', 'name_kh' => 'សំបួរមាស', 'district_id' => 55]);
				\DB::table('communes')->insert(['name_en' => 'Svay Ampear', 'name_kh' => 'ស្វាយអំពារ', 'district_id' => 55]);

			//S'ang
				\DB::table('communes')->insert(['name_en' => 'Khpob', 'name_kh' => 'ខ្ពប', 'district_id' => 56]);
				\DB::table('communes')->insert(['name_en' => 'Kaoh Anlong Chen', 'name_kh' => 'កោះអន្លង់ចិន', 'district_id' => 56]);
				\DB::table('communes')->insert(['name_en' => 'Kaoh Khael', 'name_kh' => 'កោះខែល', 'district_id' => 56]);
				\DB::table('communes')->insert(['name_en' => 'Kaoh Khsach Tonlea', 'name_kh' => 'កោះខ្សាច់ទន្លា', 'district_id' => 56]);
				\DB::table('communes')->insert(['name_en' => 'Krang Yov', 'name_kh' => 'ក្រាំងយ៉ូវ', 'district_id' => 56]);
				\DB::table('communes')->insert(['name_en' => 'Prasat', 'name_kh' => 'ប្រាសាទ', 'district_id' => 56]);
				\DB::table('communes')->insert(['name_en' => 'Preaek Ambel', 'name_kh' => 'ព្រែអំបិល', 'district_id' => 56]);
				\DB::table('communes')->insert(['name_en' => 'Preaek Koy', 'name_kh' => 'ព្រែកគយ', 'district_id' => 56]);
				\DB::table('communes')->insert(['name_en' => 'Roka Khpos', 'name_kh' => 'រកាខ្ពស់', 'district_id' => 56]);
				\DB::table('communes')->insert(['name_en' => 'Sa ang Phnum', 'name_kh' => 'ស្អាងភ្នំ', 'district_id' => 56]);
				\DB::table('communes')->insert(['name_en' => 'Setbou', 'name_kh' => 'សិត្បូ', 'district_id' => 56]);
				\DB::table('communes')->insert(['name_en' => 'Svay Prateal', 'name_kh' => 'ស្វាយប្រទាល', 'district_id' => 56]);
				\DB::table('communes')->insert(['name_en' => 'Svay Rolum', 'name_kh' => 'ស្វាយរលំ', 'district_id' => 56]);
				\DB::table('communes')->insert(['name_en' => 'Ta Lon', 'name_kh' => 'តាលន់', 'district_id' => 56]);
				\DB::table('communes')->insert(['name_en' => 'Traeuy Sla', 'name_kh' => 'ត្រើយស្លា', 'district_id' => 56]);
				\DB::table('communes')->insert(['name_en' => 'Tuek Vil', 'name_kh' => 'ទឹកវិល', 'district_id' => 56]);

			//Leuk Daek
				\DB::table('communes')->insert(['name_en' => 'Kampong Phnum', 'name_kh' => 'កំពង់ភ្នំ', 'district_id' => 57]);
				\DB::table('communes')->insert(['name_en' => 'K am Samnar', 'name_kh' => 'ក្អមសំណ', 'district_id' => 57]);
				\DB::table('communes')->insert(['name_en' => 'Khpob Ateav', 'name_kh' => 'ខ្ពបអាទាវ', 'district_id' => 57]);
				\DB::table('communes')->insert(['name_en' => 'Peam Reang ', 'name_kh' => 'ពាមរាំង', 'district_id' => 57]);
				\DB::table('communes')->insert(['name_en' => 'Preaek Dach', 'name_kh' => 'ព្រែកដាច់', 'district_id' => 57]);
				\DB::table('communes')->insert(['name_en' => 'Preaek Tonloab', 'name_kh' => 'ព្រែកទន្លាប់', 'district_id' => 57]);
				\DB::table('communes')->insert(['name_en' => 'Sandar', 'name_kh' => 'សណ្ដារ', 'district_id' => 57]);
				
			//Ta Khmau
				\DB::table('communes')->insert(['name_en' => 'Ta Kdol', 'name_kh' => 'តាក្ដុល', 'district_id' => 58]);
				\DB::table('communes')->insert(['name_en' => 'Prek Ruessey', 'name_kh' => 'ព្រែកឫស្សី', 'district_id' => 58]);
				\DB::table('communes')->insert(['name_en' => 'Doeum Mien', 'name_kh' => 'ដើមមៀន', 'district_id' => 58]);
				\DB::table('communes')->insert(['name_en' => 'Ta Khmao', 'name_kh' => 'តាខ្មៅ', 'district_id' => 58]);
				\DB::table('communes')->insert(['name_en' => 'Prek Ho', 'name_kh' => 'ព្រែកហូរ', 'district_id' => 58]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Samnanh', 'name_kh' => 'កំពង់សំណាញ់', 'district_id' => 58]);
				\DB::table('communes')->insert(['name_en' => 'Svay Rolum', 'name_kh' => 'ស្វាយរលំ', 'district_id' => 58]);
				\DB::table('communes')->insert(['name_en' => 'Setbou', 'name_kh' => 'សិត្បូ', 'district_id' => 58]);
				\DB::table('communes')->insert(['name_en' => 'Roka Kpos', 'name_kh' => 'រកាខ្ពស់', 'district_id' => 58]);
				\DB::table('communes')->insert(['name_en' => 'Khosh Anlong Chien', 'name_kh' => 'កោះអន្លង់ចិន', 'district_id' => 58]);
			
			//Kien Svay
				\DB::table('communes')->insert(['name_en' => 'Banteay Daek','name_kh' => 'បន្ទាយដែក','district_id'=>59]);
				\DB::table('communes')->insert(['name_en' => 'Chheu Teal','name_kh' => 'ឈើទាល','district_id'=>59]);
				\DB::table('communes')->insert(['name_en' => 'Dei Edth','name_kh' => 'ដីឥដ្ឋ','district_id'=>59]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Svay','name_kh' => 'កំពង់ស្វាយ','district_id'=>59]);
				\DB::table('communes')->insert(['name_en' => 'Kokir','name_kh' => 'គគីរ','district_id'=>59]);
				\DB::table('communes')->insert(['name_en' => 'Kokir Thum','name_kh' => 'គគីរធំ','district_id'=>59]);
				\DB::table('communes')->insert(['name_en' => 'Phum Thum','name_kh' => 'ភូមិធំ','district_id'=>59]);
				\DB::table('communes')->insert(['name_en' => 'Samraong Thum','name_kh' => 'សំរោងធំ','district_id'=>59]);

			//Ponhea Lueu
				\DB::table('communes')->insert(['name_en' => 'Chhveang', 'name_kh' => 'ឈ្វាំង', 'district_id' => 60]);
				\DB::table('communes')->insert(['name_en' => 'Chrey Loas', 'name_kh' => 'ជ្រៃលាស់', 'district_id' => 60]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Luong', 'name_kh' => 'កំពង់ហ្លួង', 'district_id' => 60]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Os', 'name_kh' => 'កំពង់អុស', 'district_id' => 60]);
				\DB::table('communes')->insert(['name_en' => 'Kaoh Chen', 'name_kh' => 'កោះចិន', 'district_id' => 60]);
				\DB::table('communes')->insert(['name_en' => 'Phnum Bat', 'name_kh' => 'ភ្នំបាត', 'district_id' => 60]);
				\DB::table('communes')->insert(['name_en' => 'Ponhea Lueu', 'name_kh' => 'ពញាឮ', 'district_id' => 60]);
				\DB::table('communes')->insert(['name_en' => 'Preaek Ta Teaen', 'name_kh' => 'ព្រែកតាទែន', 'district_id' => 60]);
				\DB::table('communes')->insert(['name_en' => 'Vihear Luong', 'name_kh' => 'ផ្សារដែក', 'district_id' => 60]);
				\DB::table('communes')->insert(['name_en' => 'Tumnob Thum', 'name_kh' => 'ទំនប់ធំ', 'district_id' => 60]);
				\DB::table('communes')->insert(['name_en' => 'Vihear Luong', 'name_kh' => 'វិហារហ្លួង', 'district_id' => 60]);
			
			//Lvea Aem
				\DB::table('communes')->insert(['name_en' => 'Ariyaksatr','name_kh' => 'អរិយក្សត្រ','district_id'=>61]);
				\DB::table('communes')->insert(['name_en' => 'Barong','name_kh' => 'បារុង','district_id'=>61]);
				\DB::table('communes')->insert(['name_en' => 'Beung Krum','name_kh' => 'បឹងគ្រំ','district_id'=>61]);
				\DB::table('communes')->insert(['name_en' => 'Koh Keo','name_kh' => 'កោះកែវ','district_id'=>61]);
				\DB::table('communes')->insert(['name_en' => 'Koh Reah','name_kh' => 'កោះរះ','district_id'=>61]);
				\DB::table('communes')->insert(['name_en' => 'Lvea Sor','name_kh' => 'ល្វាសរ','district_id'=>61]);
				\DB::table('communes')->insert(['name_en' => 'Peam Okhna Ong','name_kh' => 'ពាមឧកញ៉ាអុង','district_id'=>61]);
				\DB::table('communes')->insert(['name_en' => 'Phum Thom','name_kh' => 'ភូមិធំ','district_id'=>61]);
				\DB::table('communes')->insert(['name_en' => 'Praek Kmeng','name_kh' => 'ព្រែកក្មេង','district_id'=>61]);
				\DB::table('communes')->insert(['name_en' => 'Praek Rey','name_kh' => 'ព្រែករៃ','district_id'=>61]);
				\DB::table('communes')->insert(['name_en' => 'Praek Russei','name_kh' => 'ព្រែកឫស្សី','district_id'=>61]);
				\DB::table('communes')->insert(['name_en' => 'Sombour','name_kh' => 'សំបួរ','district_id'=>61]);
				\DB::table('communes')->insert(['name_en' => 'Sarikakeo','name_kh' => 'សារិកាកែវ','district_id'=>61]);
				\DB::table('communes')->insert(['name_en' => 'Thma Kor','name_kh' => 'ថ្មគរ','district_id'=>61]);
				\DB::table('communes')->insert(['name_en' => 'Teuk Khleang','name_kh' => 'ទឹកឃ្លាំង','district_id'=>61]);

				//Khsach Kandal
				\DB::table('communes')->insert(['name_en' => 'Bak Dav', 'name_kh' => 'បាក់ដាវ', 'district_id' => 62]);
				\DB::table('communes')->insert(['name_en' => 'Chey Thum', 'name_kh' => 'ជ័យធំ', 'district_id' => 62]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Chamlang', 'name_kh' => 'កំពង់ចំលង', 'district_id' => 62]);
				\DB::table('communes')->insert(['name_en' => 'Kaoh Chouram', 'name_kh' => 'កោះចូរ៉ាម', 'district_id' => 62]);
				\DB::table('communes')->insert(['name_en' => 'Kaoh Oknha Tei', 'name_kh' => 'កោះឧកញ៉ាតី', 'district_id' => 62]);
				\DB::table('communes')->insert(['name_en' => 'Preah Prasab', 'name_kh' => 'ព្រះប្រសប់', 'district_id' => 62]);
				\DB::table('communes')->insert(['name_en' => 'Preaek Ampil', 'name_kh' => 'ព្រែកអំពិល', 'district_id' => 62]);
				\DB::table('communes')->insert(['name_en' => '	Preaek Luong', 'name_kh' => 'ព្រែកលួង', 'district_id' => 62]);
				\DB::table('communes')->insert(['name_en' => 'Preaek Ta Kov', 'name_kh' => 'ព្រែកតាកូវ', 'district_id' => 62]);
				\DB::table('communes')->insert(['name_en' => 'Preaek Ta Meak', 'name_kh' => 'ព្រែកតាមាក់', 'district_id' => 62]);
				\DB::table('communes')->insert(['name_en' => 'Puk Ruessei', 'name_kh' => 'ពុកឫស្សី', 'district_id' => 62]);
				\DB::table('communes')->insert(['name_en' => 'Roka Chonlueng', 'name_kh' => 'រកាជន្លឹង', 'district_id' => 62]);
				\DB::table('communes')->insert(['name_en' => 'Sanlung', 'name_kh' => 'សន្លុង', 'district_id' => 62]);
				\DB::table('communes')->insert(['name_en' => 'Sithor', 'name_kh' => 'ស៊ីធរ', 'district_id' => 62]);
				\DB::table('communes')->insert(['name_en' => 'Svay Chrum', 'name_kh' => 'ស្វាយជ្រុំ', 'district_id' => 62]);
				\DB::table('communes')->insert(['name_en' => 'Svay Romiet', 'name_kh' => 'ស្វាយរមៀត', 'district_id' => 62]);
				\DB::table('communes')->insert(['name_en' => 'Ta Aek', 'name_kh' => 'តាឯក', 'district_id' => 62]);
				\DB::table('communes')->insert(['name_en' => 'Vihear Suork', 'name_kh' => 'វិហារសួគ៌', 'district_id' => 62]);
				
			//Angk Snuol
				// \DB::table('communes')->insert(['name_en' => 'Baek Chan','name_kh' => 'បែកចាន','district_id'=>61]);
				// \DB::table('communes')->insert(['name_en' => 'Chhork Chheu Neang','name_kh' => 'ឆក់ឈើនាង','district_id'=>61]);
				// \DB::table('communes')->insert(['name_en' => 'Domnak Ampel','name_kh' => 'ដំណាក់អំពិល​','district_id'=>61]);
				// \DB::table('communes')->insert(['name_en' => 'Krang Mkak','name_kh' => 'ក្រាំងម្កាក់','district_id'=>61]);
				// \DB::table('communes')->insert(['name_en' => 'Lomhach','name_kh' => 'លំហាច','district_id'=>61]);
				// \DB::table('communes')->insert(['name_en' => 'Mkak','name_kh' => 'ម្កាក់','district_id'=>61]);
				// \DB::table('communes')->insert(['name_en' => 'Peuk','name_kh' => 'ពើក','district_id'=>61]);
				// \DB::table('communes')->insert(['name_en' => 'Prey Pouch','name_kh' => 'ព្រៃពួច','district_id'=>61]);
				// \DB::table('communes')->insert(['name_en' => 'Somroang Leu','name_kh' => 'សំរោងលើ','district_id'=>61]);
				// \DB::table('communes')->insert(['name_en' => 'Toul Pich','name_kh' => 'ទួលពេជ្រ','district_id'=>61]);




	


	}	
}
