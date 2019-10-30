<?php

use Illuminate\Database\Seeder;

class CommunesTableSeeder extends Seeder
{
public function run()
	{
		\DB::table('communes')->truncate();
		// seeder table communes
		// phnom penh communes
			//Russey Keo
			  \DB::table('communes')->insert(['name_en' => 'Svay Pak','name_kh' => 'ស្វាយប៉ាក','district_id'=>1]);
			  \DB::table('communes')->insert(['name_en' => 'Russey Keo','name_kh' => 'ឫស្សីកែវ','district_id'=>1]);
			  \DB::table('communes')->insert(['name_en' => 'Toul Sangke','name_kh' => 'ទួលសង្កែ','district_id'=>1]);
			  \DB::table('communes')->insert(['name_en' => 'Kilometr Lek 6','name_kh' => 'គីឡូម៉ែត្រលេខ៦','district_id'=>1]);
			  \DB::table('communes')->insert(['name_en' => 'Chrang Chamreh 1','name_kh' => 'ច្រាំងចំរេះ១','district_id'=>1]);
			  \DB::table('communes')->insert(['name_en' => 'Chrang Chamreh 2','name_kh' => 'ច្រាំងចំរេះ២','district_id'=>1]);
			  \DB::table('communes')->insert(['name_en' => 'Prek leab','name_kh' => 'ព្រែកលាប','district_id'=>1]);
			  \DB::table('communes')->insert(['name_en' => 'Prek tasek','name_kh' => 'ព្រែកតាសេក','district_id'=>1]);
			  \DB::table('communes')->insert(['name_en' => 'Chroy Changva','name_kh' => 'ជ្រោយចង្វារ','district_id'=>1]);
			  \DB::table('communes')->insert(['name_en' => 'Koh Dach','name_kh' => 'កោះដាច់','district_id'=>1]);
			  \DB::table('communes')->insert(['name_en' => 'BakKheng','name_kh' => 'បាក់ខែង','district_id'=>1]);
			
			//Saensokh
			  \DB::table('communes')->insert(['name_en' => 'Krang Thnong','name_kh' => 'ក្រាំងធ្នង់','district_id'=>2]);
			  \DB::table('communes')->insert(['name_en' => 'Khmuonh','name_kh' => 'ឃ្មួញ','district_id'=>2]);
			  \DB::table('communes')->insert(['name_en' => 'Phnom Penh Thmei','name_kh' => 'ភ្នំពេញថ្មី','district_id'=>2]);
			  \DB::table('communes')->insert(['name_en' => 'Tuek Thla','name_kh' => 'ទឹកថ្លា','district_id'=>2]);
			  \DB::table('communes')->insert(['name_en' => 'Obek Kaom','name_kh' => 'អូបែកក្អម','district_id'=>2]);
			  \DB::table('communes')->insert(['name_en' => 'Punhea Pun','name_kh' => 'ពញាពន់','district_id'=>2]);
			  \DB::table('communes')->insert(['name_en' => 'Prek Pnov','name_kh' => 'ព្រែកព្នៅ','district_id'=>2]);
			  \DB::table('communes')->insert(['name_en' => 'Samraong','name_kh' => 'សំរោង','district_id'=>2]);
			  
			//Por Senchey
			  \DB::table('communes')->insert(['name_en' => 'Chaom Chau','name_kh' => 'ចោមចៅ','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Kakab','name_kh' => 'កាកាប','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Krangthnong','name_kh' => 'ក្រាំងធ្នង់','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Kokroka','name_kh' => 'គោករកា','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Samraong Kraom','name_kh' => 'សំរោងក្រោម','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Ponsaeang','name_kh' => 'ពន្សាំង','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Trapeang Krasang','name_kh' => 'ត្រពាំងក្រសាំង','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Snaor','name_kh' => 'ស្នោរ','district_id'=>3]);	  
			  \DB::table('communes')->insert(['name_en' => 'Ovlaok','name_kh' => 'ឳឡោក','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Kamboul','name_kh' => 'កំបូល','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Kantaok','name_kh' => 'កន្ទោក','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Boeng Thum','name_kh' => 'បឹងធំ','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Phleung Chheh Roteh','name_kh' => 'ភ្លើងឆេះរទេះ','district_id'=>3]);
			  
			//Chrouy Changva
			  \DB::table('communes')->insert(['name_en' => 'Chrouy Changvar','name_kh' => 'ជ្រោយចង្វារ','district_id'=>4]);
			  \DB::table('communes')->insert(['name_en' => 'Praek Leab','name_kh' => 'ព្រែកលៀប','district_id'=>4]);
			  \DB::table('communes')->insert(['name_en' => 'Praek Ta Sek','name_kh' => 'ព្រែកតាសេក','district_id'=>4]);
			  \DB::table('communes')->insert(['name_en' => 'Bak Kheng','name_kh' => 'បាក់ខែង','district_id'=>4]);
			  \DB::table('communes')->insert(['name_en' => 'Kaoh Dach','name_kh' => 'កោះដាច់','district_id'=>4]);

			//Preaek Pnov
			  \DB::table('communes')->insert(['name_en' => 'Praek Phnov','name_kh' => 'ព្រែកព្នៅ','district_id'=>5]);
			  \DB::table('communes')->insert(['name_en' => 'Ponhea Pon','name_kh' => 'ពញាពន់','district_id'=>5]);
			  \DB::table('communes')->insert(['name_en' => 'Samraong','name_kh' => 'សំរោង','district_id'=>5]);
			  \DB::table('communes')->insert(['name_en' => 'Kouk Roka','name_kh' => 'កោគរការ','district_id'=>5]);
			  \DB::table('communes')->insert(['name_en' => 'Ponsang','name_kh' => 'ពន្សាំង','district_id'=>5]);
			
			//Chbar Ampov
			  \DB::table('communes')->insert(['name_en' => 'Chbar Ampov 1','name_kh' => 'ច្បារអំពៅ១','district_id'=>6]);
			  \DB::table('communes')->insert(['name_en' => 'Chbar Ampov 2','name_kh' => 'ច្បាអំពៅ២','district_id'=>6]);
			  \DB::table('communes')->insert(['name_en' => 'Praek Pra','name_kh' => 'ព្រែកប្រា','district_id'=>6]);
			  \DB::table('communes')->insert(['name_en' => 'Nirouth','name_kh' => 'និរោធ','district_id'=>6]);
			  \DB::table('communes')->insert(['name_en' => 'Praek Aeng','name_kh' => 'ព្រែកឯង','district_id'=>6]);
			  \DB::table('communes')->insert(['name_en' => 'Praek Thmei','name_kh' => 'ព្រែកថ្មី','district_id'=>6]);
			  \DB::table('communes')->insert(['name_en' => 'Kbal Kaoh','name_kh' => 'ក្បាលកោះ','district_id'=>6]);
			  \DB::table('communes')->insert(['name_en' => 'Veal Sbov','name_kh' => 'វាលស្បូវ','district_id'=>6]);
					  
			// Daun Penh
			  \DB::table('communes')->insert(['name_en' => 'Psar Thmei1','name_kh' => 'ផ្សារថ្មី១','district_id'=>7]);
			  \DB::table('communes')->insert(['name_en' => 'Psar Thmei2','name_kh' => 'ផ្សារថ្មី២','district_id'=>7]);
			  \DB::table('communes')->insert(['name_en' => 'Psar Thmei3','name_kh' => 'ផ្សារថ្មី៣','district_id'=>7]);
			  \DB::table('communes')->insert(['name_en' => 'Boeung Reang','name_kh' => 'បឹងរាំង','district_id'=>7]);
			  \DB::table('communes')->insert(['name_en' => 'Psar Kandal1','name_kh' => 'ផ្សារកណ្ដាល១','district_id'=>7]);
			  \DB::table('communes')->insert(['name_en' => 'Psar Kandal2','name_kh' => 'ផ្សារកណ្ដាល២','district_id'=>7]);
			  \DB::table('communes')->insert(['name_en' => 'Chaktomukh','name_kh' => 'ចតុមុខ','district_id'=>7]);
			  \DB::table('communes')->insert(['name_en' => 'Chey Chumneah','name_kh' => 'ជ័យជំនះ','district_id'=>7]);
			  \DB::table('communes')->insert(['name_en' => 'Psar Chas','name_kh' => '	ផ្សារចាស់','district_id'=>7]);
			  \DB::table('communes')->insert(['name_en' => 'Srah Chork','name_kh' => '	ស្រះចក','district_id'=>7]);
			  \DB::table('communes')->insert(['name_en' => 'Vat Phnum','name_kh' => 'វត្តភ្នំ','district_id'=>7]);

			// Prampir Makara
			 \DB::table('communes')->insert(['name_en' => 'O Reussei 1','name_kh' => 'អូរឫស្សី១','district_id'=>8]);
			 \DB::table('communes')->insert(['name_en' => 'O Reussei 2','name_kh' => 'អូរឫស្សី២','district_id'=>8]);
			 \DB::table('communes')->insert(['name_en' => 'O Reussei 3','name_kh' => 'អូរឫស្សី៣','district_id'=>8]);
			 \DB::table('communes')->insert(['name_en' => 'O Reussei 4','name_kh' => 'អូរឫស្សី៤','district_id'=>8]);
			 \DB::table('communes')->insert(['name_en' => 'Monorom','name_kh' => 'មនោរម្យ','district_id'=>8]);
			 \DB::table('communes')->insert(['name_en' => 'Mittapheap','name_kh' => 'មិត្តភាព','district_id'=>8]);
			 \DB::table('communes')->insert(['name_en' => 'Vealvong','name_kh' => 'វាលវង់','district_id'=>8]);
			 \DB::table('communes')->insert(['name_en' => 'Beung Prolit','name_kh' => 'បឹងព្រលិត','district_id'=>8]);

			// Toul Kork
			 \DB::table('communes')->insert(['name_en' => 'Psar Depot1','name_kh' => 'ផ្សារដេប៉ូទី១','district_id'=>9]);
			 \DB::table('communes')->insert(['name_en' => 'Psar Depot2','name_kh' => 'ផ្សារដេប៉ូទី២','district_id'=>9]);
			 \DB::table('communes')->insert(['name_en' => 'Psar Depot3','name_kh' => 'ផ្សារដេប៉ូទី៣','district_id'=>9]);
			 \DB::table('communes')->insert(['name_en' => 'Teuk Laork1','name_kh' => 'ទឹកល្អក់ទី១','district_id'=>9]);
			 \DB::table('communes')->insert(['name_en' => 'Teuk Laork2','name_kh' => 'ទឹកល្អក់ទី២','district_id'=>9]);
			 \DB::table('communes')->insert(['name_en' => 'Teuk Laork3','name_kh' => 'ទឹកល្អក់ទី៣','district_id'=>9]);
			 \DB::table('communes')->insert(['name_en' => 'Beung Kok1','name_kh' => 'បឹងកក់១','district_id'=>9]);
			 \DB::table('communes')->insert(['name_en' => 'Beung Kok2','name_kh' => 'បឹងកក់២','district_id'=>9]);
			 \DB::table('communes')->insert(['name_en' => 'Psar Deumkor','name_kh' => 'ផ្សារដើមគ','district_id'=>9]);
			 \DB::table('communes')->insert(['name_en' => 'Beung Salang','name_kh' => 'បឹងសាឡាង','district_id'=>9]);

			// Dangkor
			 \DB::table('communes')->insert(['name_en' => 'Dangkor','name_kh' => 'ដង្កោ','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Prey Sa','name_kh' => 'ព្រៃសរ','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Cheung Aek','name_kh' => 'ជើងឯក','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Spean Thma','name_kh' => 'ស្ពានថ្ម','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Prey Vaeng','name_kh' => 'ព្រៃវែង','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Pong Tuek','name_kh' => 'ពងទឹក','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Prateah Lang','name_kh' => 'ប្រទះឡាង','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Sak Sampov','name_kh' => 'សាក់សំពៅ','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Krang Pongro','name_kh' => 'ក្រាំងពង្រ','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Kong Noy','name_kh' => 'គងនយ','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Tien','name_kh' => 'ទៀន','district_id'=>10]);
			 \DB::table('communes')->insert(['name_en' => 'Praek Kampues','name_kh' => 'ព្រែកកំពឹស','district_id'=>10]);

			// Meanchey
			 \DB::table('communes')->insert(['name_en' => 'Stung Meanchey','name_kh' => 'ស្ទឹងមានជ័យ','district_id'=>11]);
			 \DB::table('communes')->insert(['name_en' => 'Boeng Tompun','name_kh' => 'បឹងទំពុន','district_id'=>11]);
			 \DB::table('communes')->insert(['name_en' => 'Chak Angrae Leu','name_kh' => 'ចាក់អង្រែលើ','district_id'=>11]);
			 \DB::table('communes')->insert(['name_en' => 'Chak Angrae Kroam','name_kh' => 'ចាក់អង្រែក្រោម','district_id'=>11]);

			// Chamkar mon
			 \DB::table('communes')->insert(['name_en' => 'Tonle Bassac','name_kh' => 'ទន្លេបាសាក់','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Beung Kengkang1','name_kh' => 'បឹងកេងកង១','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Beung Kengkang2','name_kh' => 'បឹងកេងកង២','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Beung Kengkang3','name_kh' => 'បឹងកេងកង៣','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Olympic','name_kh' => 'អូឡាំពិច','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Toul Svayprey1','name_kh' => 'ទួលស្វាយព្រៃ១','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Toul Svayprey2','name_kh' => 'ទួលស្វាយព្រៃ២','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Tomnub Teuk','name_kh' => 'ទំនប់ទឹក','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Toul Tompung1','name_kh' => 'ទួលទំពូង១','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Toul Tompung2','name_kh' => 'ទួលទំពូង២','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Beung Trabaek','name_kh' => 'បឹងត្របែក','district_id'=>12]);
			 \DB::table('communes')->insert(['name_en' => 'Psar Deumtkov','name_kh' => 'ផ្សារដើមថ្កូវ','district_id'=>12]);

	//Preah Sihanouk
			// Krong Preah Sihanouk
			 \DB::table('communes')->insert(['name_en' => 'Sangkat 1','name_kh' => 'សង្កាត់១','district_id'=>13]);
			 \DB::table('communes')->insert(['name_en' => 'Sangkat 2','name_kh' => 'សង្កាត់២','district_id'=>13]);
			 \DB::table('communes')->insert(['name_en' => 'Sangkat 3','name_kh' => 'សង្កាត់៣','district_id'=>13]);
			 \DB::table('communes')->insert(['name_en' => 'Sangkat 4','name_kh' => 'សង្កាត់៤','district_id'=>13]);
			 \DB::table('communes')->insert(['name_en' => 'Koh Rong','name_kh' => 'កោះរុង','district_id'=>13]);

			// Prey Nob
			 \DB::table('communes')->insert(['name_en' => 'Andong Thmar','name_kh' => 'អណ្ដូងថ្ម','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Beung Taprum','name_kh' => 'បឹងតាព្រហ្ម','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Bet Trang','name_kh' => 'បិតត្រាំង','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Cheung Koar','name_kh' => 'ជើងគោ','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Ou Chrov','name_kh' => 'អូរជ្រៅ','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Ou Oknha Heng','name_kh' => 'អូរឧញ៉ាហេង','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Prey Nob','name_kh' => 'ព្រៃនប់','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Ream','name_kh' => 'រាម','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Sammaki','name_kh' => 'សាមគ្គី','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Somrong','name_kh' => 'សំរុង','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Teuk Laork','name_kh' => 'ទឹកល្អក់','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Teuk Tla','name_kh' => 'ទឹកថ្លា','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Toul Toteung','name_kh' => 'ទួលទទឹង','district_id'=>14]);
			 \DB::table('communes')->insert(['name_en' => 'Veal Rinh','name_kh' => 'វាលរេញ','district_id'=>14]);

			// Stueng Hav Chey
			 \DB::table('communes')->insert(['name_en' => 'Kompenh','name_kh' => 'កំពេញ','district_id'=>15]);
			 \DB::table('communes')->insert(['name_en' => 'Ou Treh','name_kh' => 'អូរត្រេះ','district_id'=>15]);
			 \DB::table('communes')->insert(['name_en' => 'Tomnob Rolork','name_kh' => 'ទំនប់រលក','district_id'=>15]);
			 \DB::table('communes')->insert(['name_en' => 'Keo Phos','name_kh' => 'កែវផុស','district_id'=>15]);
			 
			// Kompong Seila
			 \DB::table('communes')->insert(['name_en' => 'Chomkar Loung','name_kh' => 'ចំការហ្លួង','district_id'=>16]);
			 \DB::table('communes')->insert(['name_en' => 'Kampong Seila','name_kh' => 'កំពង់សីលា','district_id'=>16]);
			 \DB::table('communes')->insert(['name_en' => 'Ou Bak Roteh','name_kh' => 'អូរបាក់រទេះ','district_id'=>16]);
			 \DB::table('communes')->insert(['name_en' => 'Steung Chhay','name_kh' => 'ស្ទឹងឆាយ','district_id'=>16]);
		
		// Krong Kampong Cham		 
			// Krong Kampong Cham
			 \DB::table('communes')->insert(['name_en' => 'Boeng Kok','name_kh' => 'បឹងកុក','district_id'=>17]);
			 \DB::table('communes')->insert(['name_en' => 'Kampong Cham','name_kh' => 'កំពង់ចាម','district_id'=>17]);
			 \DB::table('communes')->insert(['name_en' => 'Sambuor Meas','name_kh' => 'សំបួរមាស','district_id'=>17]);
			 \DB::table('communes')->insert(['name_en' => 'Veal Vong','name_kh' => 'វាលវង់','district_id'=>17]);

			// Kampong Siem
			 \DB::table('communes')->insert(['name_en' => 'Ampil','name_kh' => 'អំពិល','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Hann Chey','name_kh' => 'ហាន់ជ័យ','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Kien Chrey','name_kh' => 'កៀនជ្រៃ','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Kokor','name_kh' => 'គគរ','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Kaoh Mitt','name_kh' => 'កោះមិត្ត','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Kaoh Roka','name_kh' => 'កោះរកា','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Kaoh Samraong','name_kh' => 'កោះសំរោង','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Kaoh Tontuem','name_kh' => 'កោះទន្ទឹម','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Krala','name_kh' => 'ក្រឡា','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Ou Svay','name_kh' => 'អូរស្វាយ','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Ro any','name_kh' => 'រអាង','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Rumchek','name_kh' => 'រំចេក','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Srak','name_kh' => 'ស្រក','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Trean','name_kh' => 'ប្រទាន','district_id'=>18]);
			 \DB::table('communes')->insert(['name_en' => 'Vihear Thum','name_kh' => 'វិហារធំ','district_id'=>18]);

			// KangMeas
			 \DB::table('communes')->insert(['name_en' => 'Angkor Ban','name_kh' => 'អង្គរបាន','district_id'=>19]);
			 \DB::table('communes')->insert(['name_en' => 'Kong Taneung','name_kh' => 'កងតាណឹង','district_id'=>19]);
			 \DB::table('communes')->insert(['name_en' => 'Khchau','name_kh' => 'ខ្ចៅ','district_id'=>19]);
			 \DB::table('communes')->insert(['name_en' => 'Peam Chikong','name_kh' => 'ពាមជីកង','district_id'=>19]);
			 \DB::table('communes')->insert(['name_en' => 'Prek Koy','name_kh' => 'ព្រែកកុយ','district_id'=>19]);
			 \DB::table('communes')->insert(['name_en' => 'Prek Krabau','name_kh' => 'ព្រែកក្របៅ','district_id'=>19]);
			 \DB::table('communes')->insert(['name_en' => 'Reay Pay','name_kh' => 'រាយប៉ាយ','district_id'=>19]);
			 \DB::table('communes')->insert(['name_en' => 'Roka-a','name_kh' => 'រកាអារ','district_id'=>19]);
			 \DB::table('communes')->insert(['name_en' => 'Roka-koy','name_kh' => 'រកាគយ','district_id'=>19]);
			 \DB::table('communes')->insert(['name_en' => 'Sdau','name_kh' => 'ស្តៅ','district_id'=>19]);
			 \DB::table('communes')->insert(['name_en' => 'Sor Korng','name_kh' => 'សូរគង','district_id'=>19]);

			// Kaoh Soutin
			 \DB::table('communes')->insert(['name_en' => 'Kampong Reab','name_kh' => 'កំពង់រាប','district_id'=>20]);
			 \DB::table('communes')->insert(['name_en' => 'Koh Sotin','name_kh' => 'កោះសូទិន','district_id'=>20]);
			 \DB::table('communes')->insert(['name_en' => 'Tve','name_kh' => 'ល្វេ','district_id'=>20]);
			 \DB::table('communes')->insert(['name_en' => 'Mohaleap','name_kh' => 'មហាលាភ','district_id'=>20]);
			 \DB::table('communes')->insert(['name_en' => 'Moha Knhoung','name_kh' => 'មហាខ្ញូង','district_id'=>20]);
			 \DB::table('communes')->insert(['name_en' => 'Peam Brothnous','name_kh' => 'ពាមប្រធ្នោះ','district_id'=>20]);
			 \DB::table('communes')->insert(['name_en' => 'Pongro','name_kh' => 'ពង្រ','district_id'=>20]);
			 \DB::table('communes')->insert(['name_en' => 'Prek Tanung','name_kh' => 'ព្រែកតានង់','district_id'=>20]);
			
			// Prey Chhor
			 \DB::table('communes')->insert(['name_en' => 'Baray','name_kh' => 'បារាយណ៍','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Beung Nay','name_kh' => 'បឹងណាយ','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Chrey Vean','name_kh' => 'ជ្រៃវៀន','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Mean','name_kh' => 'ខ្វិតធំ','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Trapeang Preah','name_kh' => 'ត្រពាំងព្រះ','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Khvet Thum','name_kh' => 'ខ្វិតធំ','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Kor','name_kh' => 'គរ','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Krouch','name_kh' => 'ក្រូច','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Lvea','name_kh' => 'ល្វា','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Prey Chor','name_kh' => 'ព្រៃឈរ','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Sor Sen','name_kh' => 'សូរ្យសែន','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Somrorng','name_kh' => 'សំរោង','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Sro Ngae','name_kh' => 'ស្រង៉ែ','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Thma Poun','name_kh' => 'ថ្មពូន','district_id'=>21]);
			 \DB::table('communes')->insert(['name_en' => 'Tong Rong','name_kh' => 'តុងរ៉ុង','district_id'=>21]);

			// Srey Santhor
			 \DB::table('communes')->insert(['name_en' => 'Baray','name_kh' => 'បារាយណ៍','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Chibal','name_kh' => 'ជីបាល','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Khnar Sor','name_kh' => 'ខ្នារស','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Koh Andet','name_kh' => 'កោះអណ្តែត','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Mean Chey','name_kh' => 'មានជ័យ','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Phteas Kandal','name_kh' => 'ផ្ទះកណ្តាល','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Bram Yam','name_kh' => 'ប្រាំយ៉ាម','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Prek Dombok','name_kh' => 'ព្រែកដំបូក','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Prek Por','name_kh' => 'ព្រែកពោធិ','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Prek Romdeng','name_kh' => 'ព្រែករំដេង','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Russey Srok','name_kh' => 'ឫស្សីស្រុក','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Svay Por','name_kh' => 'ស្វាយពោធិ','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Svay Ksach Phnom','name_kh' => 'ស្វាយសាច់ភ្នំ','district_id'=>22]);
			 \DB::table('communes')->insert(['name_en' => 'Torng Trolach','name_kh' => 'ទងត្រឡាច','district_id'=>22]);

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
			 \DB::table('communes')->insert(['name_en' => 'Batheay','name_kh' => 'បាធាយ','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Chbar Ampov','name_kh' => 'ច្បារអំពៅ','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Chealea','name_kh' => 'ជាលា','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Cheung Prey','name_kh' => 'ជើងព្រៃ','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Me Pring','name_kh' => 'មេព្រីង','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Phav','name_kh' => 'ផ្អាវ','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Sambour','name_kh' => 'សំបូរ','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Sandaek','name_kh' => 'សណ្តែក','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Tang Krang','name_kh' => 'តាំងក្រាំង','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Prasat','name_kh' => 'ប្រាសាទ','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Tang Krasang','name_kh' => 'តាំងក្រសាំង','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Trab Roung','name_kh' => 'ត្រប់រុង','district_id'=>24]);
			 \DB::table('communes')->insert(['name_en' => 'Tumnob','name_kh' => 'ទំនប់','district_id'=>24]);

			// Chamkar Leu
			 \DB::table('communes')->insert(['name_en' => 'Bos Khnaor','name_kh' => 'បុសខ្នុរ','district_id'=>25]);
			 \DB::table('communes')->insert(['name_en' => 'Chamkar Andoung','name_kh' => 'ចំការអណ្តូង','district_id'=>25]);
			 \DB::table('communes')->insert(['name_en' => 'Cheyyou','name_kh' => 'ជយោ','district_id'=>25]);
			 \DB::table('communes')->insert(['name_en' => 'Lvea Leu','name_kh' => 'ល្វាលើ','district_id'=>25]);
			 \DB::table('communes')->insert(['name_en' => 'Spueu','name_kh' => 'ស្ពឺ','district_id'=>25]);
			 \DB::table('communes')->insert(['name_en' => 'Svay Teab','name_kh' => 'ស្វាយទាប','district_id'=>25]);
			 \DB::table('communes')->insert(['name_en' => 'Ta Ong','name_kh' => 'តាអុង','district_id'=>25]);
			 \DB::table('communes')->insert(['name_en' => 'Ta Prok','name_kh' => 'តាប្រុក','district_id'=>25]);

			// Cheung Prey 
			 \DB::table('communes')->insert(['name_en' => 'Khnaor Dambang','name_kh' => 'ខ្នុរដំបង','district_id'=>26]);
			 \DB::table('communes')->insert(['name_en' => 'Kouk Rovieng','name_kh' => 'គោករវៀង','district_id'=>26]);
			 \DB::table('communes')->insert(['name_en' => 'Phdau Chum','name_kh' => 'ផ្តៅជុំ','district_id'=>26]);
			 \DB::table('communes')->insert(['name_en' => 'Prey Char','name_kh' => 'ព្រៃចារ','district_id'=>26]);
			 \DB::table('communes')->insert(['name_en' => 'Pring Chrum','name_kh' => 'ព្រីងជ្រំ','district_id'=>26]);
			 \DB::table('communes')->insert(['name_en' => 'Sampong Chey','name_kh' => 'សំពងជ័យ','district_id'=>26]);
			 \DB::table('communes')->insert(['name_en' => 'Sdaeung Chey','name_kh' => 'ស្តើងជ័យ','district_id'=>26]);
			 \DB::table('communes')->insert(['name_en' => 'Soutip','name_kh' => 'សូទិប','district_id'=>26]);
			 \DB::table('communes')->insert(['name_en' => 'Srama','name_kh' => 'ស្រម៉','district_id'=>26]);
			 \DB::table('communes')->insert(['name_en' => 'Trapeang Kor','name_kh' => 'ត្រពាំងគរ','district_id'=>26]);

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
				\DB::table('communes')->insert(['name_en' => 'Baek Chan','name_kh' => 'បែកចាន','district_id'=>61]);
				\DB::table('communes')->insert(['name_en' => 'Chhork Chheu Neang','name_kh' => 'ឆក់ឈើនាង','district_id'=>61]);
				\DB::table('communes')->insert(['name_en' => 'Domnak Ampel','name_kh' => 'ដំណាក់អំពិល​','district_id'=>61]);
				\DB::table('communes')->insert(['name_en' => 'Krang Mkak','name_kh' => 'ក្រាំងម្កាក់','district_id'=>61]);
				\DB::table('communes')->insert(['name_en' => 'Lomhach','name_kh' => 'លំហាច','district_id'=>61]);
				\DB::table('communes')->insert(['name_en' => 'Mkak','name_kh' => 'ម្កាក់','district_id'=>61]);
				\DB::table('communes')->insert(['name_en' => 'Peuk','name_kh' => 'ពើក','district_id'=>61]);
				\DB::table('communes')->insert(['name_en' => 'Prey Pouch','name_kh' => 'ព្រៃពួច','district_id'=>61]);
				\DB::table('communes')->insert(['name_en' => 'Somroang Leu','name_kh' => 'សំរោងលើ','district_id'=>61]);
				\DB::table('communes')->insert(['name_en' => 'Toul Pich','name_kh' => 'ទួលពេជ្រ','district_id'=>61]);

	//Kampong Thom
		//Baray
			\DB::table('communes')->insert(['name_en' => 'Bak Sna','name_kh' => 'បាក់ស្នា','district_id'=>88]);
			\DB::table('communes')->insert(['name_en' => 'Ballangk','name_kh' => 'បល្ល័ង្ក','district_id'=>88]);
			\DB::table('communes')->insert(['name_en' => 'Baray','name_kh' => 'បារាយណ៍','district_id'=>88]);
			\DB::table('communes')->insert(['name_en' => 'Boeng','name_kh' => 'បឹង','district_id'=>88]);
			\DB::table('communes')->insert(['name_en' => 'Chaeung Daeung','name_kh' => 'ចើងដើង','district_id'=>88]);
			\DB::table('communes')->insert(['name_en' => 'Chraneang','name_kh' => 'ច្រនាង','district_id'=>88]);
			\DB::table('communes')->insert(['name_en' => 'Chhuk Khsach','name_kh' => 'ឈូកខ្សាច់','district_id'=>88]);
			\DB::table('communes')->insert(['name_en' => 'Chong Doung','name_kh' => 'ចុងដូង','district_id'=>88]);
			\DB::table('communes')->insert(['name_en' => 'Chrolong','name_kh' => 'ជ្រលង','district_id'=>88]);
			\DB::table('communes')->insert(['name_en' => 'Kokir Thum ','name_kh' => 'គគីធំ','district_id'=>88]);
			\DB::table('communes')->insert(['name_en' => 'Krava','name_kh' => 'ក្រវ៉ា','district_id'=>88]);
			\DB::table('communes')->insert(['name_en' => 'Andoung Pou','name_kh' => 'អណ្ដូងពោធិ៍','district_id'=>88]);
			\DB::table('communes')->insert(['name_en' => 'Pongro','name_kh' => 'ពង្រ','district_id'=>88]);
			\DB::table('communes')->insert(['name_en' => 'Sou Young','name_kh' => 'សូយោង','district_id'=>88]);
			\DB::table('communes')->insert(['name_en' => 'Sralau','name_kh' => 'ស្រឡៅ','district_id'=>88]);
			\DB::table('communes')->insert(['name_en' => 'Svay Phleung','name_kh' => 'ស្វាយភ្លើង','district_id'=>88]);
			\DB::table('communes')->insert(['name_en' => 'Tnaot Chum','name_kh' => 'ត្នោតជុំ','district_id'=>88]);
			\DB::table('communes')->insert(['name_en' => 'Triel','name_kh' => 'ទ្រៀល','district_id'=>88]);
		
		//Stueng Saen
			\DB::table('communes')->insert(['name_en' => 'Damrei Choan Khla','name_kh' => 'ដំរីជាន់ខ្លា','district_id'=>89]);
			\DB::table('communes')->insert(['name_en' => 'Kampong Thum','name_kh' => 'កំពង់ធំ','district_id'=>89]);
			\DB::table('communes')->insert(['name_en' => 'Kampong Roteh','name_kh' => 'កំពង់រទេះ','district_id'=>89]);
			\DB::table('communes')->insert(['name_en' => 'Ou Kanthor','name_kh' => 'អូរកន្ធរ','district_id'=>89]);
			\DB::table('communes')->insert(['name_en' => 'Kampong','name_kh' => 'កំពង់ក្របៅ','district_id'=>89]);
			\DB::table('communes')->insert(['name_en' => 'Prey Ta Hu','name_kh' => 'ព្រៃតាហ៊ូ','district_id'=>89]);
			\DB::table('communes')->insert(['name_en' => 'Achar Leak','name_kh' => 'អាចារ្យលាក់','district_id'=>89]);
			\DB::table('communes')->insert(['name_en' => 'Srayov','name_kh' => 'ស្រយ៉ូវ','district_id'=>89]);
		
		//Sandaan
			\DB::table('communes')->insert(['name_en' => 'Chheu Teal ','name_kh' => 'ឈើទាល','district_id'=>90]);
			\DB::table('communes')->insert(['name_en' => 'Dang Kambet','name_kh' => 'ដងកាំបិត','district_id'=>90]);
			\DB::table('communes')->insert(['name_en' => 'Klaeng ','name_kh' => 'ក្លែង','district_id'=>90]);
			\DB::table('communes')->insert(['name_en' => 'Mean Rith','name_kh' => 'មានរិទ្ធ','district_id'=>90]);
			\DB::table('communes')->insert(['name_en' => 'Mean Chey','name_kh' => 'មានជ័យ','district_id'=>90]);
			\DB::table('communes')->insert(['name_en' => 'Ngan ','name_kh' => 'ងន','district_id'=>90]);
			\DB::table('communes')->insert(['name_en' => 'Sandan','name_kh' => 'សណ្ដាន់','district_id'=>90]);
			\DB::table('communes')->insert(['name_en' => 'Sochet','name_kh' => 'សុចិត្រ','district_id'=>90]);
			\DB::table('communes')->insert(['name_en' => 'Tum Ring','name_kh' => 'ទំរីង','district_id'=>90]);
		
		//Stoung
			\DB::table('communes')->insert(['name_en' => 'Banteay Stoung','name_kh' => 'បន្ទាយស្ទោង','district_id'=>91]);
			\DB::table('communes')->insert(['name_en' => 'Chamna Kraom','name_kh' => 'ចំណាក្រោម','district_id'=>91]);
			\DB::table('communes')->insert(['name_en' => 'Chamna Leu','name_kh' => 'ចំណាលើ','district_id'=>91]);
			\DB::table('communes')->insert(['name_en' => 'Kampong Chen Cheung','name_kh' => 'កំពង់ចិនជើង','district_id'=>91]);
			\DB::table('communes')->insert(['name_en' => 'Msa Krang','name_kh' => 'ម្សាក្រង','district_id'=>91]);
			\DB::table('communes')->insert(['name_en' => 'Peam Bang','name_kh' => 'ពាមបាង','district_id'=>91]);
			\DB::table('communes')->insert(['name_en' => 'Pralay','name_kh' => 'ប្រឡាយ','district_id'=>91]);
			\DB::table('communes')->insert(['name_en' => 'Preah Damrei','name_kh' => 'ព្រះដំរី','district_id'=>91]);
			\DB::table('communes')->insert(['name_en' => 'Rung Roeang','name_kh' => 'រុងរឿង','district_id'=>91]);
			\DB::table('communes')->insert(['name_en' => 'Samprouch','name_kh' => 'សំព្រោជ','district_id'=>91]);
			\DB::table('communes')->insert(['name_en' => 'Trea','name_kh' => 'ទ្រា','district_id'=>91]);
		
		//Prasat Balangk
			\DB::table('communes')->insert(['name_en' => 'Doung ','name_kh' => 'ដូង','district_id'=>92]);
			\DB::table('communes')->insert(['name_en' => 'Kraya ','name_kh' => 'ក្រយា','district_id'=>92]);
			\DB::table('communes')->insert(['name_en' => 'Phan Nheum','name_kh' => 'ផាន់ញើម','district_id'=>92]);
			\DB::table('communes')->insert(['name_en' => 'Sakream ','name_kh' => 'សាគ្រាម','district_id'=>92]);
			\DB::table('communes')->insert(['name_en' => 'Sala Visai','name_kh' => 'សាលាវិស័យ','district_id'=>92]);
			\DB::table('communes')->insert(['name_en' => 'Sameakki','name_kh' => 'សាមគ្គី','district_id'=>92]);
			\DB::table('communes')->insert(['name_en' => 'Tuol Kreul','name_kh' => 'ទួលគ្រើល','district_id'=>92]);
		
		//Santuk
			\DB::table('communes')->insert(['name_en' => 'Boeng Lvea','name_kh' => 'បឹងល្វា','district_id'=>93]);
			\DB::table('communes')->insert(['name_en' => 'Chroab ','name_kh' => 'ជ្រាប់','district_id'=>93]);
			\DB::table('communes')->insert(['name_en' => 'Kampong Thma ','name_kh' => 'កំពង់ថ្ម','district_id'=>93]);
			\DB::table('communes')->insert(['name_en' => '	Kakaoh ','name_kh' => 'កកោះ','district_id'=>93]);
			\DB::table('communes')->insert(['name_en' => 'Kraya ','name_kh' => 'ក្រយា','district_id'=>93]);
			\DB::table('communes')->insert(['name_en' => 'Pnov ','name_kh' => 'ព្នៅ','district_id'=>93]);
			\DB::table('communes')->insert(['name_en' => 'Prasat ','name_kh' => 'ប្រាសាទ','district_id'=>93]);
			\DB::table('communes')->insert(['name_en' => 'Tang Krasang','name_kh' => 'តាំងក្រសាំង','district_id'=>93]);
			\DB::table('communes')->insert(['name_en' => 'Ti Pou','name_kh' => 'ទីពោ','district_id'=>93]);
			\DB::table('communes')->insert(['name_en' => 'Tboung Krapeu','name_kh' => 'ត្បូងក្រពើ','district_id'=>93]);
		
		//Prasat Sambour
			\DB::table('communes')->insert(['name_en' => 'Chhuk','name_kh' => 'ឈូក','district_id'=>94]);
			\DB::table('communes')->insert(['name_en' => 'Koul','name_kh' => 'គោល','district_id'=>94]);
			\DB::table('communes')->insert(['name_en' => 'Sambour','name_kh' => 'សំបូរណ៍','district_id'=>94]);
			\DB::table('communes')->insert(['name_en' => 'Sraeung','name_kh' => 'ស្រើង','district_id'=>94]);
			\DB::table('communes')->insert(['name_en' => 'Tang Krasau','name_kh' => 'តាំងក្រសៅ','district_id'=>94]);

		//Kampong Svay
			\DB::table('communes')->insert(['name_en' => 'Chey','name_kh' => 'ជ័យ','district_id'=>95]);
			\DB::table('communes')->insert(['name_en' => 'Damrei Slab','name_kh' => 'ដំរីស្លាប់','district_id'=>95]);
			\DB::table('communes')->insert(['name_en' => 'Kampong Kou','name_kh' => 'កំពង់គោ','district_id'=>95]);
			\DB::table('communes')->insert(['name_en' => 'Kampong Svay','name_kh' => 'កំពង់ស្វាយ','district_id'=>95]);
			\DB::table('communes')->insert(['name_en' => 'Nipech','name_kh' => 'នីពេជ','district_id'=>95]);
			\DB::table('communes')->insert(['name_en' => 'Phat Sanday','name_kh' => 'ផាត់សណ្ដាយ','district_id'=>95]);
			\DB::table('communes')->insert(['name_en' => 'San Kor','name_kh' => 'សាន់គ','district_id'=>95]);
			\DB::table('communes')->insert(['name_en' => 'Tbaeng','name_kh' => 'ត្បែង','district_id'=>95]);
			\DB::table('communes')->insert(['name_en' => 'Trapeang','name_kh' => 'ត្រពាំងឫស្សី','district_id'=>95]);
			\DB::table('communes')->insert(['name_en' => 'Kdei Doung','name_kh' => 'ក្ដីដូង','district_id'=>95]);
			\DB::table('communes')->insert(['name_en' => 'Prey Kuy','name_kh' => 'ព្រៃគុយ','district_id'=>95]);
			
	//Kratie (ក្រចេះ)
			//Chhlong
				\DB::table('communes')->insert(['name_en' => 'Chhlong','name_kh' => 'ឆ្លូង','district_id'=>114]);
				\DB::table('communes')->insert(['name_en' => 'Domrei Phong','name_kh' => 'ដំរីផុង','district_id'=>114]);
				\DB::table('communes')->insert(['name_en' => 'Han Chey','name_kh' => 'ហាន់ជ័យ','district_id'=>114]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Domrei','name_kh' => 'កំពង់ដំរី','district_id'=>114]);
				\DB::table('communes')->insert(['name_en' => 'Kanhchor','name_kh' => 'កញ្ជរ','district_id'=>114]);
				\DB::table('communes')->insert(['name_en' => 'Ksach Andaet','name_kh' => 'ខ្សាច់អណ្ដែត','district_id'=>114]);
				\DB::table('communes')->insert(['name_en' => 'Pongro','name_kh' => 'ពង្រ','district_id'=>114]);
				\DB::table('communes')->insert(['name_en' => 'Praek Samann','name_kh' => 'ព្រែកសាម៉ាន់','district_id'=>114]);
				
			//Chitr Borei
				\DB::table('communes')->insert(['name_en' => 'Kantout','name_kh' => 'កន្ទួត','district_id'=>115]);
				\DB::table('communes')->insert(['name_en' => 'Thma Andeuk','name_kh' => 'ថ្មអណ្តើក','district_id'=>115]);
				\DB::table('communes')->insert(['name_en' => 'Koh Chraeng','name_kh' => 'កោះច្រែង','district_id'=>115]);
				\DB::table('communes')->insert(['name_en' => 'Sambok','name_kh' => 'សំបុក','district_id'=>115]);
				\DB::table('communes')->insert(['name_en' => 'Kou Lorb','name_kh' => 'គោលាប់','district_id'=>115]);
				\DB::table('communes')->insert(['name_en' => 'Thmei','name_kh' => 'ថ្មី','district_id'=>115]);
				\DB::table('communes')->insert(['name_en' => 'Dar','name_kh' => 'ដា','district_id'=>115]);
				\DB::table('communes')->insert(['name_en' => 'Bos Leav','name_kh' => 'បុសលាវ','district_id'=>115]);
				\DB::table('communes')->insert(['name_en' => 'Changkrorng','name_kh' => 'ចង្ក្រង់','district_id'=>115]);
				\DB::table('communes')->insert(['name_en' => 'Thma Krae','name_kh' => 'ថ្មគ្រែ','district_id'=>115]);
				
			//Krong Kratie
				\DB::table('communes')->insert(['name_en' => 'Koh Trorng','name_kh' => 'កោះត្រង់','district_id'=>116]);
				\DB::table('communes')->insert(['name_en' => 'Krokor','name_kh' => 'ក្រកូរ','district_id'=>116]);
				\DB::table('communes')->insert(['name_en' => 'Kratie','name_kh' => 'ក្រចេះ','district_id'=>116]);
				\DB::table('communes')->insert(['name_en' => 'Ou Russei','name_kh' => 'អូរឬស្សី','district_id'=>116]);
				\DB::table('communes')->insert(['name_en' => 'Roka Kandal','name_kh' => 'រកាកណ្តាល','district_id'=>116]);
				
			//Sombo
				\DB::table('communes')->insert(['name_en' => 'Kbal Domrei','name_kh' => 'ក្បាលដំរី','district_id'=>117]);
				\DB::table('communes')->insert(['name_en' => 'Koh Knhae','name_kh' => 'កោះខ្ញែរ','district_id'=>117]);
				\DB::table('communes')->insert(['name_en' => 'Ou Kreang','name_kh' => 'អូរគ្រៀង','district_id'=>117]);
				\DB::table('communes')->insert(['name_en' => 'Rolous Meanchey','name_kh' => 'រលួសមានជ័យ','district_id'=>117]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Cham','name_kh' => 'កំពង់ចាម','district_id'=>117]);
				\DB::table('communes')->insert(['name_en' => 'Beung Char','name_kh' => 'បឹងចារ','district_id'=>117]);
				\DB::table('communes')->insert(['name_en' => 'Sombo','name_kh' => 'សំបូរ','district_id'=>117]);
				\DB::table('communes')->insert(['name_en' => 'Sandann','name_kh' => 'សណ្តាន់','district_id'=>117]);
				\DB::table('communes')->insert(['name_en' => 'Srae Chis','name_kh' => 'ស្រែជិះ','district_id'=>117]);
				\DB::table('communes')->insert(['name_en' => 'Vadhnak','name_kh' => 'វឌ្ឍនៈ','district_id'=>117]);
			
			//Preaek Prasob
				\DB::table('communes')->insert(['name_en' => 'Chambok','name_kh' => 'ចំបក់','district_id'=>118]);
				\DB::table('communes')->insert(['name_en' => 'Chroy Banteay','name_kh' => 'ជ្រោយបន្ទាយ','district_id'=>118]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Kor','name_kh' => 'កំពង់គរ','district_id'=>118]);
				\DB::table('communes')->insert(['name_en' => 'Praek Brosop','name_kh' => 'ព្រែកប្រសព្','district_id'=>118]);
				\DB::table('communes')->insert(['name_en' => 'Russei Keo','name_kh' => 'ឫស្សីកែវ','district_id'=>118]);
				\DB::table('communes')->insert(['name_en' => 'Soab','name_kh' => 'សោប','district_id'=>118]);
				\DB::table('communes')->insert(['name_en' => 'Tamao','name_kh' => 'តាម៉ៅ','district_id'=>118]);
				
			//Snoul
				\DB::table('communes')->insert(['name_en' => 'Khseum','name_kh' => 'ឃ្សឹម','district_id'=>119]);
				\DB::table('communes')->insert(['name_en' => 'Pir Thnou','name_kh' => 'ពីរធ្នូ','district_id'=>119]);
				\DB::table('communes')->insert(['name_en' => 'Snoul','name_kh' => 'ស្នួល','district_id'=>119]);
				\DB::table('communes')->insert(['name_en' => 'Srae Char','name_kh' => 'ស្រែចារ','district_id'=>119]);
				\DB::table('communes')->insert(['name_en' => 'Svay Chreas','name_kh' => 'ស្វាយជ្រះ','district_id'=>119]);
		
		//Preah Vihear
			//Chey Saen
				\DB::table('communes')->insert(['name_en' => 'Sa ang','name_kh' => 'ស្អាង','district_id'=>133]);
				\DB::table('communes')->insert(['name_en' => 'Tor Sou','name_kh' => 'តស៊ូ','district_id'=>133]);
				\DB::table('communes')->insert(['name_en' => 'Kchorng','name_kh' => 'ខ្យង','district_id'=>133]);
				\DB::table('communes')->insert(['name_en' => 'Chrach','name_kh' => 'ច្រាច់','district_id'=>133]);
				\DB::table('communes')->insert(['name_en' => 'Thmea','name_kh' => 'ធ្មា','district_id'=>133]);
				\DB::table('communes')->insert(['name_en' => 'Putrea','name_kh' => 'ពុទ្រា','district_id'=>133]);
			
			//Choam Khsant
				\DB::table('communes')->insert(['name_en' => 'ស្រអែម','name_kh' => 'ជាំក្សាន្ត','district_id'=>134]);
				\DB::table('communes')->insert(['name_en' => 'Teuk Krahorm','name_kh' => 'ទឹកក្រហម','district_id'=>134]);
				\DB::table('communes')->insert(['name_en' => 'Pring Thom','name_kh' => 'ព្រីងធំ','district_id'=>134]);
				\DB::table('communes')->insert(['name_en' => 'Romdoh Srae','name_kh' => 'រំដោះស្រែ','district_id'=>134]);
				\DB::table('communes')->insert(['name_en' => 'Yeang','name_kh' => 'យាង','district_id'=>134]);
				\DB::table('communes')->insert(['name_en' => 'Kantout','name_kh' => 'កន្ទួត','district_id'=>134]);
				\DB::table('communes')->insert(['name_en' => 'Sraem','name_kh' => 'ស្រអែម','district_id'=>134]);
				\DB::table('communes')->insert(['name_en' => 'Morodok','name_kh' => 'មរតក','district_id'=>134]);
				
			//Rovieng
				\DB::table('communes')->insert(['name_en' => 'Robeab','name_kh' => 'របៀប','district_id'=>135]);
				\DB::table('communes')->insert(['name_en' => 'Reaksmey','name_kh' => 'រស្មី','district_id'=>135]);
				\DB::table('communes')->insert(['name_en' => 'Rohas','name_kh' => 'រហ័ស','district_id'=>135]);
				\DB::table('communes')->insert(['name_en' => 'Rong Reung','name_kh' => 'រុងរឿង','district_id'=>135]);
				\DB::table('communes')->insert(['name_en' => 'Rik Reay','name_kh' => 'រីករាយ','district_id'=>135]);
				\DB::table('communes')->insert(['name_en' => 'Rous Roan','name_kh' => 'រួសរាន់','district_id'=>135]);
				\DB::table('communes')->insert(['name_en' => 'Ratanak','name_kh' => 'រតនៈ','district_id'=>135]);
				\DB::table('communes')->insert(['name_en' => 'Reab Roay','name_kh' => 'រៀបរយ','district_id'=>135]);
				\DB::table('communes')->insert(['name_en' => 'Reaksa','name_kh' => 'រក្សា','district_id'=>135]);
				\DB::table('communes')->insert(['name_en' => 'Romdors','name_kh' => 'រំដោះ','district_id'=>135]);
				\DB::table('communes')->insert(['name_en' => 'Rumtum','name_kh' => 'រមទម','district_id'=>135]);
				\DB::table('communes')->insert(['name_en' => 'Romniy','name_kh' => 'រម្មណីយ','district_id'=>135]);
				
			//Sangkom Thmei
				\DB::table('communes')->insert(['name_en' => 'Ro ang','name_kh' => 'រអាង','district_id'=>136]);
				\DB::table('communes')->insert(['name_en' => 'Phnom Tbeng Mouy','name_kh' => 'ភ្នំត្បែងមួយ','district_id'=>136]);
				\DB::table('communes')->insert(['name_en' => 'Sdao','name_kh' => 'ស្តៅ','district_id'=>136]);
				\DB::table('communes')->insert(['name_en' => 'Ranakseh','name_kh' => 'រណសិរ្ស','district_id'=>136]);
				\DB::table('communes')->insert(['name_en' => 'Chomreun','name_kh' => 'ចំរើន','district_id'=>136]);
			
			//Chhaeb
				\DB::table('communes')->insert(['name_en' => 'Chhaeb Mouy','name_kh' => 'ឆែបមួយ','district_id'=>137]);
				\DB::table('communes')->insert(['name_en' => 'Chhaeb Pir','name_kh' => 'ឆែបពីរ','district_id'=>137]);
				\DB::table('communes')->insert(['name_en' => 'Sangke Mouy','name_kh' => 'សង្កែមួយ','district_id'=>137]);
				\DB::table('communes')->insert(['name_en' => 'Sangke Pir','name_kh' => 'សង្កែពីរ','district_id'=>137]);
				\DB::table('communes')->insert(['name_en' => 'Mlouprey Mouy','name_kh' => 'ម្លូព្រៃមួយ','district_id'=>137]);
				\DB::table('communes')->insert(['name_en' => 'Mlouprey Pir','name_kh' => 'ម្លូព្រៃពីរ','district_id'=>137]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Sralao Mouy','name_kh' => 'កំពង់ស្រឡៅមួយ','district_id'=>137]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Sralao Pir','name_kh' => 'កំពង់ស្រឡៅពីរ','district_id'=>137]);
				
			//Kulen
				\DB::table('communes')->insert(['name_en' => 'Kulen Tbong','name_kh' => 'គូលែនត្បូង','district_id'=>138]);
				\DB::table('communes')->insert(['name_en' => 'Kulen Cheung','name_kh' => 'គូលែនជើង','district_id'=>138]);
				\DB::table('communes')->insert(['name_en' => 'Thmei','name_kh' => 'ថ្មី','district_id'=>138]);
				\DB::table('communes')->insert(['name_en' => 'Phnom Penh','name_kh' => 'ភ្នំពេញ','district_id'=>138]);
				\DB::table('communes')->insert(['name_en' => 'Phnom Tbeng Pir','name_kh' => 'ភ្នំត្បែងពីរ','district_id'=>138]);
				\DB::table('communes')->insert(['name_en' => 'Sroyong','name_kh' => 'ស្រយង់','district_id'=>138]);
				
			//Tbaeng Mean Chey
				\DB::table('communes')->insert(['name_en' => 'Kompong bronouk','name_kh' => 'កំពង់ប្រណោក','district_id'=>139]);
				\DB::table('communes')->insert(['name_en' => 'Bal Hal','name_kh' => 'ប៉ាលហាល','district_id'=>139]);
				\DB::table('communes')->insert(['name_en' => 'Chhean Mukh','name_kh' => 'ឈានមុខ','district_id'=>139]);
				\DB::table('communes')->insert(['name_en' => 'Pou','name_kh' => 'ពោធិ៍','district_id'=>139]);
				\DB::table('communes')->insert(['name_en' => 'Bromeru','name_kh' => 'ប្រមេរុ','district_id'=>139]);
				\DB::table('communes')->insert(['name_en' => 'Preah Khleang','name_kh' => 'ព្រះឃ្លាំង','district_id'=>139]);
		
		//Stung Treng
			//Sesan
				\DB::table('communes')->insert(['name_en' => 'Komphun','name_kh' => 'កំភុន','district_id'=>177]);
				\DB::table('communes')->insert(['name_en' => 'Kbal Romeas','name_kh' => 'ក្បាលរមាស','district_id'=>177]);
				\DB::table('communes')->insert(['name_en' => 'Phluk','name_kh' => 'ភ្លុក','district_id'=>177]);
				\DB::table('communes')->insert(['name_en' => 'Sam Khouy','name_kh' => 'សាមឃួយ','district_id'=>177]);
				\DB::table('communes')->insert(['name_en' => 'Sdau','name_kh' => 'ស្ដៅ','district_id'=>177]);
				\DB::table('communes')->insert(['name_en' => 'Srae Kor','name_kh' => 'ស្រែគរ','district_id'=>177]);
				\DB::table('communes')->insert(['name_en' => 'Ta Lat','name_kh' => 'តាឡាត','district_id'=>177]);
			
			//Siem Bouk
				\DB::table('communes')->insert(['name_en' => 'Koh Preah','name_kh' => 'កោះព្រះ','district_id'=>178]);
				\DB::table('communes')->insert(['name_en' => 'Koh Sompeay','name_kh' => 'កោះសំពាយ','district_id'=>178]);
				\DB::table('communes')->insert(['name_en' => 'Koh Srolay','name_kh' => 'កោះស្រឡាយ','district_id'=>178]);
				\DB::table('communes')->insert(['name_en' => 'Ou Mreah','name_kh' => 'អូរម្រះ','district_id'=>178]);
				\DB::table('communes')->insert(['name_en' => 'Ou Russei Kandal','name_kh' => 'អូរឫស្សីកណ្តាល','district_id'=>178]);
				\DB::table('communes')->insert(['name_en' => 'Siem Bouk','name_kh' => 'សៀមបូក','district_id'=>178]);
				\DB::table('communes')->insert(['name_en' => 'Srae Krasang','name_kh' => 'ស្រែក្រសាំង','district_id'=>178]);
			
			//Siem Pang
				\DB::table('communes')->insert(['name_en' => 'Praek Meas','name_kh' => 'ព្រែកមាស','district_id'=>178]);
				\DB::table('communes')->insert(['name_en' => 'Sekong','name_kh' => 'សេកុង','district_id'=>178]);
				\DB::table('communes')->insert(['name_en' => 'Santipheap','name_kh' => 'សន្តិភាព','district_id'=>178]);
				\DB::table('communes')->insert(['name_en' => 'Srae Sombo','name_kh' => 'ស្រែសំបូរ','district_id'=>178]);
				\DB::table('communes')->insert(['name_en' => 'Thma Keo','name_kh' => 'ថ្មកែវ','district_id'=>178]);
			
			//Thala Barivat
				\DB::table('communes')->insert(['name_en' => 'Anlong Phe','name_kh' => 'អន្លង់ភេ','district_id'=>179]);
				\DB::table('communes')->insert(['name_en' => 'Chomkar Leu','name_kh' => 'ចំការលើ','district_id'=>179]);
				\DB::table('communes')->insert(['name_en' => 'Kang Cham','name_kh' => 'កាំងចាម','district_id'=>179]);
				\DB::table('communes')->insert(['name_en' => 'Koh Snaeng','name_kh' => 'កោះស្នែង','district_id'=>179]);
				\DB::table('communes')->insert(['name_en' => 'Ou Rai','name_kh' => 'អូររៃ','district_id'=>179]);
				\DB::table('communes')->insert(['name_en' => 'Ou Svay','name_kh' => 'អូរស្វាយ','district_id'=>179]);
				\DB::table('communes')->insert(['name_en' => 'Preah Romkel','name_kh' => 'ព្រះរំកិល','district_id'=>179]);
				\DB::table('communes')->insert(['name_en' => 'Som Ang','name_kh' => 'សំអាង','district_id'=>179]);
				\DB::table('communes')->insert(['name_en' => 'Srae Russei','name_kh' => 'ស្រែឫស្សី','district_id'=>179]);
				\DB::table('communes')->insert(['name_en' => 'Thala Borivat','name_kh' => 'ថាឡាបរិវ៉ាត់','district_id'=>179]);
				\DB::table('communes')->insert(['name_en' => 'Anlong Chrey','name_kh' => 'អន្លង់ជ្រៃ','district_id'=>179]);
			
			//Krong Stung Treng
				\DB::table('communes')->insert(['name_en' => 'Stung Trang','name_kh' => 'ស្ទឹងត្រែង','district_id'=>180]);
				\DB::table('communes')->insert(['name_en' => 'Srah Russei','name_kh' => 'ស្រះឫស្សី','district_id'=>180]);
				\DB::table('communes')->insert(['name_en' => 'Preah Bat','name_kh' => 'ព្រះបាទ','district_id'=>180]);
				\DB::table('communes')->insert(['name_en' => 'Sammaki','name_kh' => 'សាមគ្គី','district_id'=>180]);
		//Banteay Meanchey
			//Mongkol Borei		
				\DB::table('communes')->insert(['name_en' => 'Banteay Neang','name_kh' => 'បន្ទាយនាង','district_id'=>63]);
				\DB::table('communes')->insert(['name_en' => 'Bat Trang','name_kh' => 'បត់ត្រង់','district_id'=>63]);
				\DB::table('communes')->insert(['name_en' => 'Chamnaom','name_kh' => 'ចំណោម','district_id'=>63]);
				\DB::table('communes')->insert(['name_en' => 'Kouk Ballangk','name_kh' => 'គោកបល្ល័ង្គ','district_id'=>63]);
				\DB::table('communes')->insert(['name_en' => 'Koy Maeng','name_kh' => 'គយម៉ែង','district_id'=>63]);
				\DB::table('communes')->insert(['name_en' => 'Ou Prasat','name_kh' => 'អូរប្រាសាទ','district_id'=>63]);
				\DB::table('communes')->insert(['name_en' => 'Phnum Touch','name_kh' => 'ភ្នំតូច','district_id'=>63]);
				\DB::table('communes')->insert(['name_en' => 'Rohat Tuek','name_kh' => 'រហាត់ទឹក','district_id'=>63]);
				\DB::table('communes')->insert(['name_en' => 'Ruessei Kraok','name_kh' => 'ឫស្សីក្រោក','district_id'=>63]);
				\DB::table('communes')->insert(['name_en' => 'Sambuor','name_kh' => 'សំបួរ','district_id'=>63]);
				\DB::table('communes')->insert(['name_en' => 'Soea','name_kh' => 'សឿ','district_id'=>63]);
				\DB::table('communes')->insert(['name_en' => 'Srah Reang ','name_kh' => 'ស្រះរាំង','district_id'=>63]);
				\DB::table('communes')->insert(['name_en' => 'Ta Lam','name_kh' => 'តាឡំ','district_id'=>63]);
			
			//Preah Netr Preah
				\DB::table('communes')->insert(['name_en' => 'Chhnuor Mean Chey','name_kh' => 'ឈ្នួរមានជ័យ','district_id'=>64]);
				\DB::table('communes')->insert(['name_en' => 'Chob Veari','name_kh' => 'ជប់វារី','district_id'=>64]);
				\DB::table('communes')->insert(['name_en' => 'Phnum Lieb','name_kh' => 'ភ្នំលៀប','district_id'=>64]);
				\DB::table('communes')->insert(['name_en' => 'Prasat','name_kh' => 'ប្រាសាទ','district_id'=>64]);
				\DB::table('communes')->insert(['name_en' => 'Preah Netr Preah','name_kh' => 'ព្រះនេត្រព្រះ','district_id'=>64]);
				\DB::table('communes')->insert(['name_en' => 'Rohal','name_kh' => 'រហាល','district_id'=>64]);
				\DB::table('communes')->insert(['name_en' => 'Tean Kam','name_kh' => 'ទានកាំ','district_id'=>64]);
				\DB::table('communes')->insert(['name_en' => 'Tuek Chour','name_kh' => 'ទឹកជោរ','district_id'=>64]);
			
			//Serei Saophoan
				\DB::table('communes')->insert(['name_en' => 'Bos Sbov','name_kh' => 'បុស្បូវ','district_id'=>65]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Svay','name_kh' => 'កំពង់ស្វាយ','district_id'=>65]);
				\DB::table('communes')->insert(['name_en' => 'Kaoh Pong Satv','name_kh' => 'កោះពងសត្វ','district_id'=>65]);
				\DB::table('communes')->insert(['name_en' => 'Mkak','name_kh' => 'ម្កាក់','district_id'=>65]);
				\DB::table('communes')->insert(['name_en' => 'Ou Ambel','name_kh' => 'អូរអំបិល','district_id'=>65]);
				\DB::table('communes')->insert(['name_en' => 'Phniet','name_kh' => 'ភ្នៀត','district_id'=>65]);
				\DB::table('communes')->insert(['name_en' => 'Preah Ponlea','name_kh' => 'ព្រះពន្លា','district_id'=>65]);
				\DB::table('communes')->insert(['name_en' => 'Tuek Thla','name_kh' => 'ទឹកថ្លា','district_id'=>65]);
			
			//Svay Chek
				\DB::table('communes')->insert(['name_en' => 'Phkoam','name_kh' => 'ផ្គាំ','district_id'=>66]);
				\DB::table('communes')->insert(['name_en' => 'Sarongk','name_kh' => 'សារង្គ','district_id'=>66]);
				\DB::table('communes')->insert(['name_en' => 'Sla Kram','name_kh' => 'ស្លក្រាម','district_id'=>66]);
				\DB::table('communes')->insert(['name_en' => 'Svay Chek','name_kh' => 'ស្វាយចេក','district_id'=>66]);
				\DB::table('communes')->insert(['name_en' => 'Ta Baen','name_kh' => 'តាបែន','district_id'=>66]);
				\DB::table('communes')->insert(['name_en' => 'Ta Phou','name_kh' => 'តាផូ','district_id'=>66]);
				\DB::table('communes')->insert(['name_en' => 'Treas','name_kh' => 'ទ្រាស','district_id'=>66]);
				\DB::table('communes')->insert(['name_en' => 'Roluos','name_kh' => 'រលួស','district_id'=>66]);
			
			//Ou Chrov
				\DB::table('communes')->insert(['name_en' => 'Changha','name_kh' => 'ចង្ហា','district_id'=>67]);
				\DB::table('communes')->insert(['name_en' => 'Koub','name_kh' => 'កូប','district_id'=>67]);
				\DB::table('communes')->insert(['name_en' => 'Kuttasat','name_kh' => 'គុត្តសត','district_id'=>67]);
				\DB::table('communes')->insert(['name_en' => 'Nimitt','name_kh' => 'និមិត្ត','district_id'=>67]);
				\DB::table('communes')->insert(['name_en' => 'Samraong','name_kh' => 'សំរោង','district_id'=>67]);
				\DB::table('communes')->insert(['name_en' => 'Souphi','name_kh' => 'សូភី','district_id'=>67]);
				\DB::table('communes')->insert(['name_en' => 'Soengh','name_kh' => 'សឹង្ហ','district_id'=>67]);
				\DB::table('communes')->insert(['name_en' => 'Paoy Paet','name_kh' => 'ប៉ោយប៉ែត','district_id'=>67]);
				\DB::table('communes')->insert(['name_en' => 'Ou Bei Choan','name_kh' => 'អូរបីជាន់','district_id'=>67]);
				
			//Thma Puok
				\DB::table('communes')->insert(['name_en' => 'Banteay Chhmar','name_kh' => 'បន្ទាយឆ្មារ','district_id'=>68]);
				\DB::table('communes')->insert(['name_en' => 'Kouk Romiet','name_kh' => 'គោករមៀត','district_id'=>68]);
				\DB::table('communes')->insert(['name_en' => 'Phum Thmei','name_kh' => 'ថ្មពួក','district_id'=>68]);
				\DB::table('communes')->insert(['name_en' => 'Thma Puok','name_kh' => 'គោកកឋិន','district_id'=>68]);
				\DB::table('communes')->insert(['name_en' => 'Kouk Kakthen','name_kh' => 'គំរូ','district_id'=>68]);
				\DB::table('communes')->insert(['name_en' => 'Kumru','name_kh' => 'ភូមិថ្មី','district_id'=>68]);
				
			//Malai
				\DB::table('communes')->insert(['name_en' => 'Boeng Beng','name_kh' => 'បឹងបេង','district_id'=>69]);
				\DB::table('communes')->insert(['name_en' => 'Malai','name_kh' => 'ម៉ាឡៃ','district_id'=>69]);
				\DB::table('communes')->insert(['name_en' => 'Ou Sampor','name_kh' => 'អូរសំព័រ','district_id'=>69]);
				\DB::table('communes')->insert(['name_en' => 'Ou Sralau','name_kh' => 'អូរស្រឡៅ','district_id'=>69]);
				\DB::table('communes')->insert(['name_en' => 'Tuol Pongro','name_kh' => 'ទួលពង្រ','district_id'=>69]);
				\DB::table('communes')->insert(['name_en' => 'Ta Kong','name_kh' => 'តាគង់','district_id'=>69]);
			
			//Ou Chrov
				\DB::table('communes')->insert(['name_en' => 'Changha','name_kh' => 'ចង្ហា','district_id'=>70]);
				\DB::table('communes')->insert(['name_en' => 'Koub','name_kh' => 'កូប','district_id'=>70]);
				\DB::table('communes')->insert(['name_en' => 'Kuttasat','name_kh' => 'គុត្តសត','district_id'=>70]);
				\DB::table('communes')->insert(['name_en' => 'Nimitt','name_kh' => 'និមិត្ត','district_id'=>70]);
				\DB::table('communes')->insert(['name_en' => 'Samraong','name_kh' => 'សំរោង','district_id'=>70]);
				\DB::table('communes')->insert(['name_en' => 'Souphi','name_kh' => 'សូភី','district_id'=>70]);
				\DB::table('communes')->insert(['name_en' => 'Soengh','name_kh' => 'សឹង្ហ','district_id'=>70]);
				\DB::table('communes')->insert(['name_en' => 'Paoy Paet','name_kh' => 'ប៉ោយប៉ែត','district_id'=>70]);
				\DB::table('communes')->insert(['name_en' => 'Ou Bei Choan','name_kh' => 'អូរបីជាន់','district_id'=>70]);
				
			//Phnum Srok
				\DB::table('communes')->insert(['name_en' => 'Nam Tau','name_kh' => 'ណាំតៅ','district_id'=>71]);
				\DB::table('communes')->insert(['name_en' => 'Paoy Char','name_kh' => 'ប៉ោយចារ','district_id'=>71]);
				\DB::table('communes')->insert(['name_en' => 'Ponley','name_kh' => 'ពន្លៃ','district_id'=>71]);
				\DB::table('communes')->insert(['name_en' => 'Spean Sraeng','name_kh' => 'ស្ពានស្រែង','district_id'=>71]);
				\DB::table('communes')->insert(['name_en' => 'Srah Chik','name_kh' => 'ស្រះជីក','district_id'=>71]);
				\DB::table('communes')->insert(['name_en' => 'Phnum Dei','name_kh' => 'ភ្នំដី','district_id'=>71]);
				
		//Kampong Chhnang
			//Baribour
				\DB::table('communes')->insert(['name_en' => 'Anhchanh Rung','name_kh' => 'អញ្ចាញរូង','district_id'=>72]);
				\DB::table('communes')->insert(['name_en' => 'Chhnok Tru','name_kh' => 'ឆ្នុកទ្រូ','district_id'=>72]);
				\DB::table('communes')->insert(['name_en' => 'Chak','name_kh' => 'ចក','district_id'=>72]);
				\DB::table('communes')->insert(['name_en' => 'Khon Rang','name_kh' => 'ខុនរ៉ង','district_id'=>72]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Preah Kokir','name_kh' => 'កំពង់ព្រះគគីរ','district_id'=>72]);
				\DB::table('communes')->insert(['name_en' => 'Melum','name_kh' => 'មេលំ','district_id'=>72]);
				\DB::table('communes')->insert(['name_en' => 'Phsar','name_kh' => 'ផ្សារ','district_id'=>72]);
				\DB::table('communes')->insert(['name_en' => 'Pech Changvar','name_kh' => 'ពេជ្រចង្វារ','district_id'=>72]);
				\DB::table('communes')->insert(['name_en' => 'Popel','name_kh' => 'ពពេល','district_id'=>72]);
				\DB::table('communes')->insert(['name_en' => 'Ponley','name_kh' => 'ពន្លៃ','district_id'=>72]);
				\DB::table('communes')->insert(['name_en' => 'Trapeang Chan','name_kh' => 'ត្រពាំងចាន់','district_id'=>72]);
			
			//Kampong Chhnang
				\DB::table('communes')->insert(['name_en' => 'Phsar Chhnang','name_kh' => 'ផ្សារឆ្នាំង','district_id'=>73]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Chhnang','name_kh' => 'កំពង់ឆ្នាំង','district_id'=>73]);
				\DB::table('communes')->insert(['name_en' => 'Pha er','name_kh' => 'ប្អេរ','district_id'=>73]);
				\DB::table('communes')->insert(['name_en' => 'Khsam','name_kh' => 'ខ្សាម','district_id'=>73]);
				
			//Kampong Tralach		
				\DB::table('communes')->insert(['name_en' => 'Ampil Tuek','name_kh' => 'អំពិលទឹក','district_id'=>74]);
				\DB::table('communes')->insert(['name_en' => 'Chhuk Sa','name_kh' => 'ឈូកស','district_id'=>74]);
				\DB::table('communes')->insert(['name_en' => 'Chres','name_kh' => 'ច្រេស','district_id'=>74]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Tralach','name_kh' => 'កំពង់ត្រឡាច','district_id'=>74]);
				\DB::table('communes')->insert(['name_en' => 'Longveaek','name_kh' => 'លង្វែក','district_id'=>74]);
				\DB::table('communes')->insert(['name_en' => 'Ou Ruessei','name_kh' => 'អូរឬស្សី','district_id'=>74]);
				\DB::table('communes')->insert(['name_en' => 'Peani','name_kh' => 'ពានី','district_id'=>74]);
				\DB::table('communes')->insert(['name_en' => 'Saeb','name_kh' => 'សែប','district_id'=>74]);
				\DB::table('communes')->insert(['name_en' => 'Ta Ches','name_kh' => 'តាជេស','district_id'=>74]);
				\DB::table('communes')->insert(['name_en' => 'Thma Edth','name_kh' => 'ថ្មឥដ្ឋ','district_id'=>74]);
			
			//Sameakki
				\DB::table('communes')->insert(['name_en' => 'Chhean Laeung','name_kh' => 'ឈានឡើង','district_id'=>75]);
				\DB::table('communes')->insert(['name_en' => 'Khnar Chhmar','name_kh' => 'ខ្នាឆ្មារ','district_id'=>75]);
				\DB::table('communes')->insert(['name_en' => 'Krang Lvea','name_kh' => 'រាំល្វា','district_id'=>75]);
				\DB::table('communes')->insert(['name_en' => 'Peam','name_kh' => 'ពាម','district_id'=>75]);
				\DB::table('communes')->insert(['name_en' => 'Sedthei','name_kh' => 'សេដ្ឋី','district_id'=>75]);
				\DB::table('communes')->insert(['name_en' => 'Svay','name_kh' => 'ស្វាយ','district_id'=>75]);
				\DB::table('communes')->insert(['name_en' => 'Svay Chuk','name_kh' => 'ស្វាយជុក','district_id'=>75]);
				\DB::table('communes')->insert(['name_en' => 'Tbaeng Khpos','name_kh' => 'ត្បែងខ្ពស់','district_id'=>75]);
				\DB::table('communes')->insert(['name_en' => 'Thlok Vien','name_kh' => 'ធ្លកវៀន','district_id'=>75]);
			
			//Kampong Leaeng
				\DB::table('communes')->insert(['name_en' => 'Chranouk','name_kh' => 'ច្រណូក','district_id'=>76]);
				\DB::table('communes')->insert(['name_en' => 'Dar','name_kh' => 'ដារ','district_id'=>76]);
				\DB::table('communes')->insert(['name_en' => 'Kampong hau','name_kh' => 'កំពង់ហៅ','district_id'=>76]);
				\DB::table('communes')->insert(['name_en' => 'Phlov Tuk','name_kh' => 'ផ្លូវទូក','district_id'=>76]);
				\DB::table('communes')->insert(['name_en' => 'Pou','name_kh' => 'ពោធិ៍','district_id'=>76]);
				\DB::table('communes')->insert(['name_en' => 'Pralay Meas','name_kh' => 'ប្រឡាយមាស','district_id'=>76]);
				\DB::table('communes')->insert(['name_en' => 'Samraong Saen','name_kh' => 'សំរោងសែន','district_id'=>76]);
				\DB::table('communes')->insert(['name_en' => 'Svay Rumpear','name_kh' => 'ស្វាយរំពារ','district_id'=>76]);
				\DB::table('communes')->insert(['name_en' => 'Trangel','name_kh' => 'ត្រងិល','district_id'=>76]);
				
			//Chol Kiri
				\DB::table('communes')->insert(['name_en' => 'Chol Sarg','name_kh' => 'ជលសា','district_id'=>77]);
				\DB::table('communes')->insert(['name_en' => 'Kaoh Thkov','name_kh' => 'កោះថ្កូវ','district_id'=>77]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Os','name_kh' => 'កំពង់អុស','district_id'=>77]);
				\DB::table('communes')->insert(['name_en' => 'Peam Chhkaok','name_kh' => 'ពាមឆ្កោក','district_id'=>77]);
				\DB::table('communes')->insert(['name_en' => 'Prey Kri','name_kh' => 'ព្រៃគ្រី','district_id'=>77]);
				
			//Rolea B'ier
				\DB::table('communes')->insert(['name_en' => 'Andoung Snay','name_kh' => 'អណ្តូងស្នាយ','district_id'=>78]);
				\DB::table('communes')->insert(['name_en' => 'Banteay Preal','name_kh' => 'បន្ទាយព្រាល','district_id'=>78]);
				\DB::table('communes')->insert(['name_en' => 'Cheung Kreav','name_kh' => 'ជើងគ្រាវ','district_id'=>78]);
				\DB::table('communes')->insert(['name_en' => 'Chrey Bak','name_kh' => 'ជ្រៃបាក់','district_id'=>78]);
				\DB::table('communes')->insert(['name_en' => 'Kouk Banteay','name_kh' => 'គោកបន្ទាយ','district_id'=>78]);
				\DB::table('communes')->insert(['name_en' => 'Krang Leav','name_kh' => 'ក្រាំងលាវ','district_id'=>78]);
				\DB::table('communes')->insert(['name_en' => 'Pongro','name_kh' => 'ពង្រ','district_id'=>78]);
				\DB::table('communes')->insert(['name_en' => 'Prasneb','name_kh' => 'ប្រស្នឹប','district_id'=>78]);
				\DB::table('communes')->insert(['name_en' => 'Prey Mul','name_kh' => 'ព្រៃមូល','district_id'=>78]);
				\DB::table('communes')->insert(['name_en' => 'Rolea Ba ier','name_kh' => 'រលាប្អៀរ','district_id'=>78]);
				\DB::table('communes')->insert(['name_en' => 'Srae Thmei','name_kh' => 'ស្រែថ្មី','district_id'=>78]);
				\DB::table('communes')->insert(['name_en' => 'Svay Chrum','name_kh' => 'ស្វាយជ្រុំ','district_id'=>78]);
				\DB::table('communes')->insert(['name_en' => 'Tuek Hout','name_kh' => 'ទឹកហូត','district_id'=>78]);
			
			//Tuek Phos
				\DB::table('communes')->insert(['name_en' => 'Akphivoadth ','name_kh' => 'អភិវឌ្ឍន៍','district_id'=>79]);
				\DB::table('communes')->insert(['name_en' => 'Chieb ','name_kh' => 'ជៀប','district_id'=>79]);
				\DB::table('communes')->insert(['name_en' => 'Chaong Maong','name_kh' => 'ចោងម៉ោង','district_id'=>79]);
				\DB::table('communes')->insert(['name_en' => 'Kbal Tuek','name_kh' => 'ក្បាលទឹក','district_id'=>79]);
				\DB::table('communes')->insert(['name_en' => 'Khlong Popok','name_kh' => 'ខ្លុងពពក','district_id'=>79]);
				\DB::table('communes')->insert(['name_en' => 'Krang Skear','name_kh' => 'រាំងស្គារ','district_id'=>79]);
				\DB::table('communes')->insert(['name_en' => 'Tang Krasang','name_kh' => 'តាំងក្រសាំង','district_id'=>79]);
				\DB::table('communes')->insert(['name_en' => 'Tuol Khpos','name_kh' => 'ទួលខ្ពស់','district_id'=>79]);
		
		//Kampong Speu
			//Basedth
				\DB::table('communes')->insert(['name_en' => 'Basedth','name_kh' => 'បរសេដ្ឋ','district_id'=>80]);
				\DB::table('communes')->insert(['name_en' => 'Kat Phluk','name_kh' => 'កាត់ភ្លុក','district_id'=>80]);
				\DB::table('communes')->insert(['name_en' => 'Nitean','name_kh' => 'និទាន','district_id'=>80]);
				\DB::table('communes')->insert(['name_en' => 'Pheakdei','name_kh' => 'ភក្ដី','district_id'=>80]);
				\DB::table('communes')->insert(['name_en' => 'Pheari Mean Chey','name_kh' => 'ភារីមានជ័យ','district_id'=>80]);
				\DB::table('communes')->insert(['name_en' => 'Phong','name_kh' => 'ផុង','district_id'=>80]);
				\DB::table('communes')->insert(['name_en' => 'Pou Angkrang','name_kh' => 'ពោធិអង្ក្រង','district_id'=>80]);
				\DB::table('communes')->insert(['name_en' => 'Pou Chamraeun','name_kh' => 'ពោធិ៍ចំរើន','district_id'=>80]);
				\DB::table('communes')->insert(['name_en' => 'Pou Mreal','name_kh' => 'ពោធិ៍ម្រាល','district_id'=>80]);
				\DB::table('communes')->insert(['name_en' => 'Svay Chacheb','name_kh' => 'ស្វាយចចិប','district_id'=>80]);
				\DB::table('communes')->insert(['name_en' => 'Tuol Ampil','name_kh' => 'ទួលអំពិល','district_id'=>80]);
				\DB::table('communes')->insert(['name_en' => 'Tuol Sala','name_kh' => 'ទួលសាលា','district_id'=>80]);
				\DB::table('communes')->insert(['name_en' => 'Kak','name_kh' => 'កក់','district_id'=>80]);
				\DB::table('communes')->insert(['name_en' => 'Svay Rumpear','name_kh' => 'ស្វាយរំពារ','district_id'=>80]);
				\DB::table('communes')->insert(['name_en' => 'Preah Khae','name_kh' => 'ព្រះខែ','district_id'=>80]);
			
			//Kong Pisei
				\DB::table('communes')->insert(['name_en' => 'Angk Popel','name_kh' => 'អង្គពពេល','district_id'=>81]);
				\DB::table('communes')->insert(['name_en' => 'Chongruk','name_kh' => 'ជង្រុក','district_id'=>81]);
				\DB::table('communes')->insert(['name_en' => 'Moha Ruessei','name_kh' => 'មហាឫស្សី','district_id'=>81]);
				\DB::table('communes')->insert(['name_en' => 'Pechr Muni','name_kh' => 'ពេជ្រមុនី','district_id'=>81]);
				\DB::table('communes')->insert(['name_en' => 'Preah Nipean','name_kh' => 'ព្រះនិព្វាន','district_id'=>81]);
				\DB::table('communes')->insert(['name_en' => 'Prey Nheat','name_kh' => 'ព្រៃញាតិ','district_id'=>81]);
				\DB::table('communes')->insert(['name_en' => 'Prey Vihear','name_kh' => 'ព្រៃវិហារ','district_id'=>81]);
				\DB::table('communes')->insert(['name_en' => 'Roka Kaoh','name_kh' => 'រកាកោះ','district_id'=>81]);
				\DB::table('communes')->insert(['name_en' => 'Sdok','name_kh' => 'ស្ដុក','district_id'=>81]);
				\DB::table('communes')->insert(['name_en' => 'Snam Krapeu','name_kh' => 'ស្នំក្រពើ','district_id'=>81]);
				\DB::table('communes')->insert(['name_en' => 'Srang','name_kh' => 'ស្រង់','district_id'=>81]);
				\DB::table('communes')->insert(['name_en' => 'Tuek La ak','name_kh' => 'ទឹកល្អក់','district_id'=>81]);
				\DB::table('communes')->insert(['name_en' => 'Veal','name_kh' => 'វាល','district_id'=>81]);
			
			//Odongk
				\DB::table('communes')->insert(['name_en' => 'Chan Saen','name_kh' => 'ចាន់សែន','district_id'=>82]);
				\DB::table('communes')->insert(['name_en' => 'Cheung Roas','name_kh' => 'ជើងរាស់','district_id'=>82]);
				\DB::table('communes')->insert(['name_en' => 'Chumpu Proeks','name_kh' => 'ជំពូព្រឹក្ស','district_id'=>82]);
				\DB::table('communes')->insert(['name_en' => 'Khsem Khsant','name_kh' => 'ក្សេមក្សាន្ត','district_id'=>82]);
				\DB::table('communes')->insert(['name_en' => 'Krang Chek','name_kh' => 'រាំងចេក','district_id'=>82]);
				\DB::table('communes')->insert(['name_en' => 'Mean Chey','name_kh' => 'មានជ័យ','district_id'=>82]);
				\DB::table('communes')->insert(['name_en' => 'Preah Srae','name_kh' => 'ព្រះស្រែ','district_id'=>82]);
				\DB::table('communes')->insert(['name_en' => 'Prey Krasang','name_kh' => 'ព្រៃក្រសាំង','district_id'=>82]);
				\DB::table('communes')->insert(['name_en' => 'Trach Tong','name_kh' => 'ត្រាចទង','district_id'=>82]);
				\DB::table('communes')->insert(['name_en' => 'Veal Pong','name_kh' => 'វាលពង់','district_id'=>82]);
				\DB::table('communes')->insert(['name_en' => 'Veang Chas','name_kh' => 'វាំងចាស់','district_id'=>82]);
				\DB::table('communes')->insert(['name_en' => 'Damnak Rang','name_kh' => 'ដំណាក់រាំង','district_id'=>82]);
				\DB::table('communes')->insert(['name_en' => 'Peang Lvea','name_kh' => 'ពាំងល្វា','district_id'=>82]);
				\DB::table('communes')->insert(['name_en' => 'Moat Ou','name_kh' => 'មាត់អូរ','district_id'=>82]);
				\DB::table('communes')->insert(['name_en' => 'Phum Touch','name_kh' => 'ភ្នំតូច','district_id'=>82]);
				
			//Samraong Tong
				\DB::table('communes')->insert(['name_en' => 'Roleang Chak','name_kh' => 'រលាំងចក','district_id'=>83]);
				\DB::table('communes')->insert(['name_en' => 'Kahaeng','name_kh' => 'កាហែង','district_id'=>83]);
				\DB::table('communes')->insert(['name_en' => 'Khtum Krang','name_kh' => 'ខ្ទុំក្រាំង','district_id'=>83]);
				\DB::table('communes')->insert(['name_en' => 'Krang Ampil','name_kh' => 'រាំងអំពិល','district_id'=>83]);
				\DB::table('communes')->insert(['name_en' => 'Pneay ','name_kh' => 'ព្នាយ','district_id'=>83]);
				\DB::table('communes')->insert(['name_en' => 'Roleang Kreul','name_kh' => 'រលាំងគ្រើល','district_id'=>83]);
				\DB::table('communes')->insert(['name_en' => 'Samrong Tong','name_kh' => 'សំរោងទង','district_id'=>83]);
				\DB::table('communes')->insert(['name_en' => 'Sambor','name_kh' => 'សំបូរ','district_id'=>83]);
				\DB::table('communes')->insert(['name_en' => 'Saen Dei','name_kh' => 'សែងដី','district_id'=>83]);
				\DB::table('communes')->insert(['name_en' => 'Skuh ','name_kh' => 'គុះ','district_id'=>83]);
				\DB::table('communes')->insert(['name_en' => 'Tang Krouch','name_kh' => 'តាំងក្រូច','district_id'=>83]);
				\DB::table('communes')->insert(['name_en' => 'Thummoda Ar','name_kh' => 'ធម្មតាអរ','district_id'=>83]);
				\DB::table('communes')->insert(['name_en' => 'Trapeang Kong','name_kh' => 'ត្រពាំងគង','district_id'=>83]);
				\DB::table('communes')->insert(['name_en' => 'Tumpoar Meas','name_kh' => 'ទំព័រមាស','district_id'=>83]);
				\DB::table('communes')->insert(['name_en' => 'Voa Sar','name_kh' => 'វល្លិសរ','district_id'=>83]);
				
			//Aoral
				\DB::table('communes')->insert(['name_en' => 'Haong Samnam','name_kh' => 'ហោងសំណំ','district_id'=>84]);
				\DB::table('communes')->insert(['name_en' => 'Reaksmei Sameakki','name_kh' => 'រស្មីសាមគ្គី','district_id'=>84]);
				\DB::table('communes')->insert(['name_en' => 'Trapeang Chour','name_kh' => 'ត្រពាំងជោ','district_id'=>84]);
				\DB::table('communes')->insert(['name_en' => 'Sangkae Satob','name_kh' => 'សង្កែសាទប','district_id'=>84]);
				\DB::table('communes')->insert(['name_en' => '	Ta Sal','name_kh' => 'តាសាល','district_id'=>84]);
				
			//Phnom Sruoch
				\DB::table('communes')->insert(['name_en' => 'Chambak ','name_kh' => 'ចំបក់','district_id'=>85]);
				\DB::table('communes')->insert(['name_en' => 'Choam Sangkae','name_kh' => 'ជាំសង្កែ','district_id'=>85]);
				\DB::table('communes')->insert(['name_en' => 'Dambouk Rung','name_kh' => 'ដំបូករូង','district_id'=>85]);
				\DB::table('communes')->insert(['name_en' => 'Kiri Voan','name_kh' => 'គិរីវន្ដ','district_id'=>85]);
				\DB::table('communes')->insert(['name_en' => 'Krang Dei Vay','name_kh' => 'រាំងដីវ៉ាយ','district_id'=>85]);
				\DB::table('communes')->insert(['name_en' => 'Moha Sang','name_kh' => 'មហាសាំង','district_id'=>85]);
				\DB::table('communes')->insert(['name_en' => 'Ou','name_kh' => 'អូរ','district_id'=>85]);
				\DB::table('communes')->insert(['name_en' => 'Prey Rumduol','name_kh' => 'ព្រៃរំដួល','district_id'=>85]);
				\DB::table('communes')->insert(['name_en' => 'Prey Kmeng','name_kh' => 'ព្រៃក្មេង','district_id'=>85]);
				\DB::table('communes')->insert(['name_en' => 'Tang Samraong','name_kh' => 'តាំងសំរោង','district_id'=>85]);
				\DB::table('communes')->insert(['name_en' => 'Tang Sya','name_kh' => 'តាំងស្យា','district_id'=>85]);
				\DB::table('communes')->insert(['name_en' => 'Traeng Trayueng','name_kh' => 'ត្រែងត្រយឹង','district_id'=>85]);
			
			//Chbar Mon
				\DB::table('communes')->insert(['name_en' => 'Chbar Mon','name_kh' => 'ច្បារមន','district_id'=>86]);
				\DB::table('communes')->insert(['name_en' => 'Kandaol Dom','name_kh' => 'កណ្តោលដុំ','district_id'=>86]);
				\DB::table('communes')->insert(['name_en' => 'Roka Thum','name_kh' => 'រកាធំ','district_id'=>86]);
				\DB::table('communes')->insert(['name_en' => 'Sopoar Tep','name_kh' => 'សុព័រទេព','district_id'=>86]);
				\DB::table('communes')->insert(['name_en' => 'Svay Kravan','name_kh' => 'ស្វាយក្រវ៉ាន់','district_id'=>86]);
			
			//Thpong
				\DB::table('communes')->insert(['name_en' => 'Amleang','name_kh' => 'អមលាំង','district_id'=>87]);
				\DB::table('communes')->insert(['name_en' => 'Monourom','name_kh' => 'មនោរម្យ','district_id'=>87]);
				\DB::table('communes')->insert(['name_en' => 'Prambei Mum','name_kh' => 'ប្រាំបីមុម','district_id'=>87]);
				\DB::table('communes')->insert(['name_en' => 'Rung Roeang','name_kh' => 'រុងរឿង','district_id'=>87]);
				\DB::table('communes')->insert(['name_en' => 'Toap Mean','name_kh' => 'ទ័ពមាន','district_id'=>87]);
				\DB::table('communes')->insert(['name_en' => 'Veal Pon','name_kh' => 'វាលពន់','district_id'=>87]);
				\DB::table('communes')->insert(['name_en' => 'Yea Angk','name_kh' => 'យាអង្គ','district_id'=>87]);
		
		//Kampot
			//Angkor Chey
				\DB::table('communes')->insert(['name_en' => 'Angk Phnum Touch','name_kh' => 'អង្គភ្នំតូច','district_id'=>96]);
				\DB::table('communes')->insert(['name_en' => 'Ankor Chey','name_kh' => 'អង្គរជ័យ','district_id'=>96]);
				\DB::table('communes')->insert(['name_en' => 'Champei','name_kh' => 'ចំប៉ី','district_id'=>96]);
				\DB::table('communes')->insert(['name_en' => 'Dambouk','name_kh' => 'ដំបូកខ្ពស់','district_id'=>96]);
				\DB::table('communes')->insert(['name_en' => 'Dan Koum','name_kh' => 'ដានគោម','district_id'=>96]);
				\DB::table('communes')->insert(['name_en' => 'Daeum Doung','name_kh' => 'ដើមដូង','district_id'=>96]);
				\DB::table('communes')->insert(['name_en' => 'Mroum','name_kh' => 'ម្រោម','district_id'=>96]);
				\DB::table('communes')->insert(['name_en' => 'Phnum Kong','name_kh' => 'ភ្នំកុង','district_id'=>96]);
				\DB::table('communes')->insert(['name_en' => 'Praphnum','name_kh' => 'ប្រភ្នំ','district_id'=>96]);
				\DB::table('communes')->insert(['name_en' => 'Samlanh','name_kh' => 'សំឡាញ','district_id'=>96]);
				\DB::table('communes')->insert(['name_en' => 'Tani','name_kh' => 'តានី','district_id'=>96]);
			
			//Chhuk
				\DB::table('communes')->insert(['name_en' => 'Baneav','name_kh' => 'បានៀវ','district_id'=>97]);
				\DB::table('communes')->insert(['name_en' => 'Beung Nimol','name_kh' => 'បឹងនិមល','district_id'=>97]);
				\DB::table('communes')->insert(['name_en' => 'Chhouk','name_kh' => 'ឈូក','district_id'=>97]);
				\DB::table('communes')->insert(['name_en' => 'Daun Yoy','name_kh' => 'ដូនយ៉យ','district_id'=>97]);
				\DB::table('communes')->insert(['name_en' => 'Krang Sbov','name_kh' => 'ក្រាំងស្បូវ','district_id'=>97]);
				\DB::table('communes')->insert(['name_en' => 'Krang Snay','name_kh' => 'ក្រាំងស្នាយ','district_id'=>97]);
				\DB::table('communes')->insert(['name_en' => 'Lbeuk','name_kh' => 'ល្បើក','district_id'=>97]);
				\DB::table('communes')->insert(['name_en' => 'Meanchey','name_kh' => 'មានជ័យ','district_id'=>97]);
				\DB::table('communes')->insert(['name_en' => 'Noreay','name_kh' => 'នរាយណ៍','district_id'=>97]);
				\DB::table('communes')->insert(['name_en' => 'Satv Porng','name_kh' => 'សត្វពង','district_id'=>97]);
				\DB::table('communes')->insert(['name_en' => 'Trapeang Bei','name_kh' => 'ត្រពាំងបី','district_id'=>97]);
				\DB::table('communes')->insert(['name_en' => 'Tromaeng','name_kh' => 'ត្រមែង','district_id'=>97]);
				\DB::table('communes')->insert(['name_en' => 'Takaen','name_kh' => 'តាកែន','district_id'=>97]);
				\DB::table('communes')->insert(['name_en' => 'Trapeang Phlearng','name_kh' => 'ត្រពាំងភ្លាំង','district_id'=>97]);
				\DB::table('communes')->insert(['name_en' => 'Decho Aphivat','name_kh' => 'តេជោអភិវឌ្ឍន៍','district_id'=>97]);
			
			//Dorng Tong
				\DB::table('communes')->insert(['name_en' => 'Domnak Sokrom','name_kh' => 'ដំណាក់សុក្រំ','district_id'=>98]);
				\DB::table('communes')->insert(['name_en' => 'Dorng Tong','name_kh' => 'ដងទង់','district_id'=>98]);
				\DB::table('communes')->insert(['name_en' => 'Kcheay Khang Cheung','name_kh' => 'ខ្ជាយខាងជើង','district_id'=>98]);
				\DB::table('communes')->insert(['name_en' => 'Kcheay Khang Tbong','name_kh' => 'ខ្ជាយខាងត្បូង','district_id'=>98]);
				\DB::table('communes')->insert(['name_en' => 'Meanrith','name_kh' => 'មានរិទ្ធិ','district_id'=>98]);
				\DB::table('communes')->insert(['name_en' => 'Sraechea Khang Cheung','name_kh' => 'ស្រែជាខាងជើង','district_id'=>98]);
				\DB::table('communes')->insert(['name_en' => 'Sraechea Khang Tbong','name_kh' => 'ស្រែជាខាងត្បូង','district_id'=>98]);
				\DB::table('communes')->insert(['name_en' => 'Totung','name_kh' => 'ទទង់','district_id'=>98]);
				\DB::table('communes')->insert(['name_en' => 'Angk Romeas','name_kh' => 'អង្គរមាស','district_id'=>98]);
				\DB::table('communes')->insert(['name_en' => 'La​​ ang','name_kh' => 'ល្អាង','district_id'=>98]);

			//Teouk Chhou
				\DB::table('communes')->insert(['name_en' => 'Beung Touk','name_kh' => 'បឹងទូក','district_id'=>99]);
				\DB::table('communes')->insert(['name_en' => 'Chum Kreal','name_kh' => 'ជុំគ្រៀល','district_id'=>99]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Samrorng','name_kh' => 'កំពង់សំរោង','district_id'=>99]);
				\DB::table('communes')->insert(['name_en' => 'Kandoal','name_kh' => 'កណ្ដាល','district_id'=>99]);
				\DB::table('communes')->insert(['name_en' => 'Koh Toch','name_kh' => 'កោះតូច','district_id'=>99]);
				\DB::table('communes')->insert(['name_en' => 'Kon Sat','name_kh' => 'កូនសត្វ','district_id'=>99]);
				\DB::table('communes')->insert(['name_en' => 'Mak Brang','name_kh' => 'ម៉ាកប្រាំង','district_id'=>99]);
				\DB::table('communes')->insert(['name_en' => 'Praek Tnoat','name_kh' => 'ព្រែកត្នោត','district_id'=>99]);
				\DB::table('communes')->insert(['name_en' => 'Prey Khmum','name_kh' => 'ព្រៃឃ្មុំ','district_id'=>99]);
				\DB::table('communes')->insert(['name_en' => 'Prey Tnorng','name_kh' => 'ព្រៃថ្នាំង','district_id'=>99]);
				\DB::table('communes')->insert(['name_en' => 'Stueng Keo','name_kh' => 'ស្ទឹងកែវ','district_id'=>99]);
				\DB::table('communes')->insert(['name_en' => 'Thmei','name_kh' => 'ថ្មី','district_id'=>99]);
				\DB::table('communes')->insert(['name_en' => 'Trapeang Pring','name_kh' => 'ត្រពាំងព្រីង','district_id'=>99]);
				\DB::table('communes')->insert(['name_en' => 'Trapeang Sangke','name_kh' => 'ត្រពាំងសង្កែ','district_id'=>99]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Kraeng','name_kh' => 'កំពង់គ្រែង','district_id'=>99]);
				\DB::table('communes')->insert(['name_en' => 'Trapeang Thom','name_kh' => 'ត្រពាំងធំ','district_id'=>99]);
			
			//Banteay Meas
				\DB::table('communes')->insert(['name_en' => 'Tnoat Chong Srorng','name_kh' => 'ត្នោតចុងស្រង់','district_id'=>100]);
				\DB::table('communes')->insert(['name_en' => 'Trapeang Sala Khang Kert','name_kh' => 'ត្រពាំងសាលាខាងកើត','district_id'=>100]);
				\DB::table('communes')->insert(['name_en' => 'Trapeang Sala Khang Lech','name_kh' => 'ត្រពាំងសាលាខាងលិច','district_id'=>100]);
				\DB::table('communes')->insert(['name_en' => 'Touk Meas Khang Kert','name_kh' => 'ទូកមាសខាងកើត','district_id'=>100]);
				\DB::table('communes')->insert(['name_en' => 'Touk Meas Khang Lech','name_kh' => 'ទូកមាសខាងលិច','district_id'=>100]);
				\DB::table('communes')->insert(['name_en' => 'Banteay Meas Khang Kert','name_kh' => 'បន្ទាយមាសខាងកើត','district_id'=>100]);
				\DB::table('communes')->insert(['name_en' => 'Banteay Meas Khang Lech','name_kh' => 'បន្ទាយមាសខាងលិច','district_id'=>100]);
				\DB::table('communes')->insert(['name_en' => 'Prey Tonle','name_kh' => 'ព្រៃទន្លេ​','district_id'=>100]);
				\DB::table('communes')->insert(['name_en' => 'Vat Angk Khang Cheung','name_kh' => 'វត្តអង្គខាងជើង','district_id'=>100]);
				\DB::table('communes')->insert(['name_en' => 'Vat Angk Khang Tbong','name_kh' => 'វត្តអង្គខាងត្បូង','district_id'=>100]);
				\DB::table('communes')->insert(['name_en' => 'Somrorng Krom','name_kh' => 'សំរោងក្រោម','district_id'=>100]);
				\DB::table('communes')->insert(['name_en' => 'Somrorng Leu','name_kh' => 'សំរោងលើ','district_id'=>100]);
				\DB::table('communes')->insert(['name_en' => 'Sdechkong Khang Cheung','name_kh' => 'ស្ដេចគង់ខាងជើង','district_id'=>100]);
				\DB::table('communes')->insert(['name_en' => 'Sdechkong Khang Tbong','name_kh' => 'ស្តេចគង់ខាងត្បូង','district_id'=>100]);
				\DB::table('communes')->insert(['name_en' => 'Sdechkong Khang Lech','name_kh' => 'ស្តេចគង់ខាងលិច','district_id'=>100]);
				
			//Kampong Trach
				\DB::table('communes')->insert(['name_en' => 'Beung Sala Khang Cheung','name_kh' => 'បឹងសាលាខាងជើង','district_id'=>101]);
				\DB::table('communes')->insert(['name_en' => 'Beung Sala Khang Tbong','name_kh' => 'បឹងសាលាខាងត្បូង','district_id'=>101]);
				\DB::table('communes')->insert(['name_en' => 'Domnak Kantout Khan Cheung','name_kh' => 'ដំណាក់កន្ទួតខាងជើង','district_id'=>101]);
				\DB::table('communes')->insert(['name_en' => 'Domnak Kantout Khan Tbong','name_kh' => 'ដំណាក់កន្ទួតខាងត្បូង','district_id'=>101]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Trach Khang Kert','name_kh' => 'កំពង់ត្រាចខាងកើត','district_id'=>101]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Trach Khang Lech','name_kh' => 'កំពង់ត្រាចខាងលិច','district_id'=>101]);
				\DB::table('communes')->insert(['name_en' => 'Brasat Phnom Kchorng','name_kh' => 'ប្រាសាទភ្នំខ្យង','district_id'=>101]);
				\DB::table('communes')->insert(['name_en' => 'Phnom Brasat','name_kh' => 'ភ្នំប្រាសាទ','district_id'=>101]);
				\DB::table('communes')->insert(['name_en' => 'Angk Sorphi','name_kh' => 'អង្គសុរភី','district_id'=>101]);
				\DB::table('communes')->insert(['name_en' => 'Praek Kreus','name_kh' => 'ព្រែកក្រឹស','district_id'=>101]);
				\DB::table('communes')->insert(['name_en' => 'Russei Srok Khang Kert','name_kh' => 'ឫស្សីស្រុកខាងកើត','district_id'=>101]);
				\DB::table('communes')->insert(['name_en' => 'Russei Srok Khang Lech','name_kh' => 'ឫស្សីស្រុកខាងលិច','district_id'=>101]);
				\DB::table('communes')->insert(['name_en' => 'Svay Torng Khang Cheung','name_kh' => 'ស្វាយទងខាងជើង','district_id'=>101]);
				\DB::table('communes')->insert(['name_en' => 'Svay Torng Khang Tbong','name_kh' => 'ស្វាយទងខាងត្បូង','district_id'=>101]);
			
			//Chum Kiri
				\DB::table('communes')->insert(['name_en' => 'Chres','name_kh' => 'ច្រេស','district_id'=>102]);
				\DB::table('communes')->insert(['name_en' => 'Chompouvornt','name_kh' => 'ជំពូវន្ត','district_id'=>102]);
				\DB::table('communes')->insert(['name_en' => 'Snay Anhchit','name_kh' => 'ស្នាយអញ្ជិត','district_id'=>102]);
				\DB::table('communes')->insert(['name_en' => 'Srae Chaeng','name_kh' => 'ស្រែចែង','district_id'=>102]);
				\DB::table('communes')->insert(['name_en' => 'Srae Khnong','name_kh' => 'ស្រែក្នុង','district_id'=>102]);
				\DB::table('communes')->insert(['name_en' => 'Srae Somroang','name_kh' => 'ស្រែសំរោង','district_id'=>102]);
				\DB::table('communes')->insert(['name_en' => 'Trapeang Reang','name_kh' => 'ត្រពាំងរាំង','district_id'=>102]);
				
			//Kampot
				\DB::table('communes')->insert(['name_en' => 'Kampong Kandal','name_kh' => 'កំពង់កណ្ដាល','district_id'=>103]);
				\DB::table('communes')->insert(['name_en' => 'Krang Ampil','name_kh' => 'ក្រាំងអំពិល','district_id'=>103]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Bay','name_kh' => 'កំពង់បាយ','district_id'=>103]);
				\DB::table('communes')->insert(['name_en' => 'Andong Khmer','name_kh' => 'អណ្ដូងខ្មែរ','district_id'=>103]);
				\DB::table('communes')->insert(['name_en' => 'Treuy Koh','name_kh' => 'ត្រើយកោះ','district_id'=>103]);
		
		//Kep
			// Krong Kep
				\DB::table('communes')->insert(['name_en' => 'O Krosa','name_kh' => 'អូរក្រសារ','district_id'=> 104]);
				\DB::table('communes')->insert(['name_en' => 'Keb','name_kh' => 'កែប','district_id'=>104 ]);
				\DB::table('communes')->insert(['name_en' => 'Prey Thom','name_kh' => 'ព្រៃធំ','district_id'=> 104]);
			
			//Damnak Chang aeur
				\DB::table('communes')->insert(['name_en' => 'Angkoal','name_kh' => 'អង្កោល','district_id'=>105]);
				\DB::table('communes')->insert(['name_en' => 'Porng Teuk','name_kh' => 'ពងទឹក','district_id'=>105]);
				
		//Koh Kong
			//Botum Sakor
				\DB::table('communes')->insert(['name_en' => 'Andoung Tuek','name_kh' => 'អណ្ដូងទឹក','district_id'=>108]);
				\DB::table('communes')->insert(['name_en' => 'Kandaol','name_kh' => 'កណ្ដោល','district_id'=>108]);
				\DB::table('communes')->insert(['name_en' => 'Ta Noun','name_kh' => 'តានូន','district_id'=>108]);
				\DB::table('communes')->insert(['name_en' => 'Thma Sa','name_kh' => 'ថ្មស','district_id'=>108]);
			
			//Koh Kong
				\DB::table('communes')->insert(['name_en' => 'Chrouy Pras','name_kh' => 'ជ្រោយប្រស់','district_id'=>109]);
				\DB::table('communes')->insert(['name_en' => 'Kaoh Kapi','name_kh' => 'កោះកាពិ','district_id'=>109]);
				\DB::table('communes')->insert(['name_en' => 'Ta Tai Kraom','name_kh' => 'តាតៃក្រោម','district_id'=>109]);
				\DB::table('communes')->insert(['name_en' => 'Trapeang Rung','name_kh' => 'ត្រពាំងរូង','district_id'=>109]);
			
			//Mondol Seima
				\DB::table('communes')->insert(['name_en' => 'Pak Khlang','name_kh' => 'ប៉ាក់ខ្លង','district_id'=>110]);
				\DB::table('communes')->insert(['name_en' => 'Peam Krasaob','name_kh' => 'ពាមក្រសោប','district_id'=>110]);
				\DB::table('communes')->insert(['name_en' => 'Tuol Kokir','name_kh' => 'ទួលគគីរ','district_id'=>110]);
				
			//Thma Bang
				\DB::table('communes')->insert(['name_en' => 'Tatai Leu','name_kh' => 'តាតៃលើ','district_id'=>123]);
				\DB::table('communes')->insert(['name_en' => 'Brolay','name_kh' => 'ប្រលាយ','district_id'=>123]);
				\DB::table('communes')->insert(['name_en' => 'Chomnoab','name_kh' => 'ចំណាប់','district_id'=>123]);
				\DB::table('communes')->insert(['name_en' => 'Russei Chrum','name_kh' => 'ឬស្សី ​រ្្រជុំ','district_id'=>123]);
				\DB::table('communes')->insert(['name_en' => 'Chiphat','name_kh' => 'ឈិម​ ផាត់','district_id'=>123]);
				\DB::table('communes')->insert(['name_en' => 'Thma Daunpouv','name_kh' => 'ថ្មដូនពៅ','district_id'=>123]);
			
			//Kiri Sakor
				\DB::table('communes')->insert(['name_en' => '	Kaoh Sdach','name_kh' => 'កោះស្ដេច','district_id'=>124]);
				\DB::table('communes')->insert(['name_en' => '	Phnhi Meas','name_kh' => 'ភ្ញីមាស','district_id'=>124]);
				\DB::table('communes')->insert(['name_en' => 'Preaek Khsach','name_kh' => 'ព្រែកខ្សាច់','district_id'=>124]);
			
			//Khemara Phoumin
				\DB::table('communes')->insert(['name_en' => 'Smach Meanchey','name_kh' => 'ស្មាចមានជ័យ','district_id'=>125]);
				\DB::table('communes')->insert(['name_en' => 'Dorng Tung','name_kh' => 'ដងទង់','district_id'=>125]);
				\DB::table('communes')->insert(['name_en' => 'Steung Vaeng','name_kh' => 'ស្ទឹងវែង','district_id'=>125]);
				
			//Srae Ambel
				\DB::table('communes')->insert(['name_en' => 'Beung Preav','name_kh' => 'បឹងព្រាវ','district_id'=>126]);
				\DB::table('communes')->insert(['name_en' => 'Chi Kho Krom','name_kh' => 'ជីខក្រោម','district_id'=>126]);
				\DB::table('communes')->insert(['name_en' => 'Chi Kho Leu','name_kh' => 'ជីខលើ','district_id'=>126]);
				\DB::table('communes')->insert(['name_en' => 'Chroy Svay','name_kh' => 'ជ្រោយស្វាយ	','district_id'=>126]);
				\DB::table('communes')->insert(['name_en' => 'Dorng Paeng','name_kh' => 'ដងពែក','district_id'=>126]);
				\DB::table('communes')->insert(['name_en' => 'Srae Ambel','name_kh' => 'ស្រែអំបិល','district_id'=>126]);
		
		//Mondulkiri
			//Kaev Seima
				\DB::table('communes')->insert(['name_en' => 'Chong Phlas','name_kh' => 'ចុងផ្លាស់','district_id'=>120]);
				\DB::table('communes')->insert(['name_en' => 'Memorng','name_kh' => 'មេម៉ង','district_id'=>120]);
				\DB::table('communes')->insert(['name_en' => 'Sre Chhouk','name_kh' => 'ស្រែឈូក','district_id'=>120]);
				\DB::table('communes')->insert(['name_en' => 'Sre Khtum','name_kh' => 'ស្រែខ្ទុម','district_id'=>120]);
				\DB::table('communes')->insert(['name_en' => 'Sre Phres','name_kh' => 'ស្រែព្រះ','district_id'=>120]);
			
			//Ou Reang
				\DB::table('communes')->insert(['name_en' => 'Dak Dam','name_kh' => 'ដាក់ដាំ','district_id'=>121]);
				\DB::table('communes')->insert(['name_en' => 'Saen Monorom','name_kh' => 'សែនមនោរម្យ','district_id'=>121]);
			
			//Krong Saen
				\DB::table('communes')->insert(['name_en' => 'Monorom','name_kh' => 'មនោរម្យ','district_id'=>122]);
				\DB::table('communes')->insert(['name_en' => 'Sokh Dom','name_kh' => 'សុខដុម','district_id'=>122]);
				\DB::table('communes')->insert(['name_en' => 'Spean Meanchey','name_kh' => 'ស្ពានមានជ័យ','district_id'=>122]);
				\DB::table('communes')->insert(['name_en' => 'Rum Monea','name_kh' => 'រមនា','district_id'=>122]);
				
			//Pech Chreada
				\DB::table('communes')->insert(['name_en' => 'Krang Teh','name_kh' => 'ក្រង់តេះ','district_id'=>123]);
				\DB::table('communes')->insert(['name_en' => 'Pou Chrey','name_kh' => 'ពូជ្រៃ','district_id'=>123]);
				\DB::table('communes')->insert(['name_en' => 'Sre Ompoum','name_kh' => 'ស្រែអំពូម','district_id'=>123]);
				\DB::table('communes')->insert(['name_en' => 'Bou Sra','name_kh' => 'ប៊ូស្រា','district_id'=>123]);
			
			//Kaoh Nheaek
				\DB::table('communes')->insert(['name_en' => '','name_kh' => 'ណងឃីលិក','district_id'=>124]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => 'អបួនលើ','district_id'=>124]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => 'រយ៉','district_id'=>124]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => 'សុខសាន្ត','district_id'=>124]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => 'ស្រែហ៊ុយ','district_id'=>124]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => 'ស្រែសង្គម','district_id'=>124]);
		
		//Oddar Meanchey
			//Anlong Veaeng
				\DB::table('communes')->insert(['name_en' => 'Anlong Veaeng','name_kh' => 'អន្លង់វែង','district_id'=>125]);
				\DB::table('communes')->insert(['name_en' => 'Lomtorng','name_kh' => 'លំទង','district_id'=>125]);
				\DB::table('communes')->insert(['name_en' => 'Thlat','name_kh' => 'ថ្លាត','district_id'=>125]);
				\DB::table('communes')->insert(['name_en' => 'Trapeang Brey','name_kh' => 'ត្រពាំងប្រីយ៍','district_id'=>125]);
				\DB::table('communes')->insert(['name_en' => 'Trapeang Tav','name_kh' => 'ត្រពាំងតាវ','district_id'=>125]);
				
			//Banteay Ampil
				\DB::table('communes')->insert(['name_en' => 'Ampil','name_kh' => 'អំពិល','district_id'=>126]);
				\DB::table('communes')->insert(['name_en' => 'Beng','name_kh' => 'បេង','district_id'=>126]);
				\DB::table('communes')->insert(['name_en' => 'Koak Kpous','name_kh' => 'គោកខ្ពស់','district_id'=>126]);
				\DB::table('communes')->insert(['name_en' => 'Koak Mon','name_kh' => 'គោកមន','district_id'=>126]);
				
			//Chong Kal
				\DB::table('communes')->insert(['name_en' => 'Cheung Tean','name_kh' => 'ជើងទៀន','district_id'=>127]);
				\DB::table('communes')->insert(['name_en' => 'Chung Kal','name_kh' => 'ចុងកាល់','district_id'=>127]);
				\DB::table('communes')->insert(['name_en' => 'Krasaing','name_kh' => 'ក្រសាំង','district_id'=>127]);
				\DB::table('communes')->insert(['name_en' => 'Pongro','name_kh' => 'ពង្រ','district_id'=>127]);
			
			//Krong Samraong
				\DB::table('communes')->insert(['name_en' => 'Samroang','name_kh' => 'សំរោង','district_id'=>128]);
				\DB::table('communes')->insert(['name_en' => 'Bansay Reak','name_kh' => 'បន្សាយរាក់','district_id'=>128]);
				\DB::table('communes')->insert(['name_en' => 'Kaun Kreal','name_kh' => 'កូនគ្រៀល','district_id'=>128]);
				\DB::table('communes')->insert(['name_en' => 'Bosbov','name_kh' => 'បុស្បូវ','district_id'=>128]);
				\DB::table('communes')->insert(['name_en' => 'O Smach','name_kh' => 'អូរស្មាច់','district_id'=>128]);
				
			//Trapeang Prasat
				\DB::table('communes')->insert(['name_en' => 'Bak Anlung','name_kh' => 'បាក់អន្លូង','district_id'=>129]);
				\DB::table('communes')->insert(['name_en' => 'Ou Svay','name_kh' => 'អូរស្វាយ','district_id'=>129]);
				\DB::table('communes')->insert(['name_en' => 'Pa av','name_kh' => 'ផ្អាវ','district_id'=>129]);
				\DB::table('communes')->insert(['name_en' => 'Preah Brolay','name_kh' => 'ព្រះប្រឡាយ','district_id'=>129]);
				\DB::table('communes')->insert(['name_en' => 'Trapeang Brasat','name_kh' => 'ត្រពាំងប្រាសាទ','district_id'=>129]);
				\DB::table('communes')->insert(['name_en' => 'Tomnub Dach','name_kh' => 'ទំនប់ដាច់','district_id'=>129]);
		
		//Pailin
			//Krong Pailin
				\DB::table('communes')->insert(['name_en' => 'Pailin','name_kh' => 'ប៉ៃលិន','district_id'=>130]);
				\DB::table('communes')->insert(['name_en' => 'Ou Tavao','name_kh' => 'អូរតាវ៉ៅ','district_id'=>130]);
				\DB::table('communes')->insert(['name_en' => 'Toul Lvea','name_kh' => 'ទួលល្វា','district_id'=>130]);
				\DB::table('communes')->insert(['name_en' => '','name_kh' => 'បយ៉ាខា','district_id'=>130]);
				
			//Sala Krau
				\DB::table('communes')->insert(['name_en' => 'Sala Krao','name_kh' => 'សាលាក្រៅ','district_id'=>131]);
				\DB::table('communes')->insert(['name_en' => 'Steung Trorng','name_kh' => 'ស្ទឹងត្រង់','district_id'=>131]);
				\DB::table('communes')->insert(['name_en' => 'Steung Kach','name_kh' => 'ស្ទឹងកាច់','district_id'=>131]);
				\DB::table('communes')->insert(['name_en' => 'Ou Andong','name_kh' => 'អូរអណ្តូង','district_id'=>131]);
			
			//Chong Kal

		//Prey Veng
			//Ba Phnum
				\DB::table('communes')->insert(['name_en' => 'Boeng Preah','name_kh' => 'បឹងព្រះ','district_id'=>141]);
				\DB::table('communes')->insert(['name_en' => 'Cheung Phnum','name_kh' => 'ជើងភ្នំ','district_id'=>141]);
				\DB::table('communes')->insert(['name_en' => 'Chheu Kach','name_kh' => 'ឈើកាច់','district_id'=>141]);
				\DB::table('communes')->insert(['name_en' => 'Reaks Chey','name_kh' => 'រក្សជ័យ','district_id'=>141]);
				\DB::table('communes')->insert(['name_en' => 'Roung Damrei','name_kh' => 'រោងដំរី','district_id'=>141]);
				\DB::table('communes')->insert(['name_en' => 'Sdau Kaong','name_kh' => 'ស្ដៅកោង','district_id'=>141]);
				\DB::table('communes')->insert(['name_en' => 'Spueu Ka','name_kh' => 'ស្ពឺ ក','district_id'=>141]);
				\DB::table('communes')->insert(['name_en' => 'Spueu Kha','name_kh' => 'ស្ពឺ ខ','district_id'=>141]);
				\DB::table('communes')->insert(['name_en' => 'Theay','name_kh' => 'ធាយ','district_id'=>141]);
				
			//Kanhchriech
				\DB::table('communes')->insert(['name_en' => 'Chong Ampil','name_kh' => 'ចុងអំពិល','district_id'=>142]);
				\DB::table('communes')->insert(['name_en' => 'Kanhchriech','name_kh' => 'កញ្ជ្រៀច','district_id'=>142]);
				\DB::table('communes')->insert(['name_en' => 'Kdoeang Reay','name_kh' => 'ក្ដឿងរាយ','district_id'=>142]);
				\DB::table('communes')->insert(['name_en' => 'Kouk Kong Kaeut','name_kh' => 'គោកគង់កើត','district_id'=>142]);
				\DB::table('communes')->insert(['name_en' => 'Kouk Kong Lech','name_kh' => 'គោកគង់លិច','district_id'=>142]);
				\DB::table('communes')->insert(['name_en' => 'Preal','name_kh' => 'ព្រាល','district_id'=>142]);
				\DB::table('communes')->insert(['name_en' => 'Thma Pun','name_kh' => 'ថ្មពូន','district_id'=>142]);
				\DB::table('communes')->insert(['name_en' => 'Tnaot','name_kh' => 'ត្នោត','district_id'=>142]);
				
			//Peam Ro
				\DB::table('communes')->insert(['name_en' => 'Baboang','name_kh' => 'បាបោង','district_id'=>143]);
				\DB::table('communes')->insert(['name_en' => 'Banlich Brasat','name_kh' => 'បន្លិចប្រាសាទ','district_id'=>143]);
				\DB::table('communes')->insert(['name_en' => 'Neak Leung','name_kh' => 'អ្នកលឿង','district_id'=>143]);
				\DB::table('communes')->insert(['name_en' => 'Peam Meanchey','name_kh' => 'ពាមមានជ័យ','district_id'=>143]);
				\DB::table('communes')->insert(['name_en' => 'Pream Ro','name_kh' => 'ពាមរ​ក៏','district_id'=>143]);
				\DB::table('communes')->insert(['name_en' => 'Praek Ksay "K"','name_kh' => 'ព្រែកខ្សាយ ក','district_id'=>143]);
				\DB::table('communes')->insert(['name_en' => 'Praek Ksay "Kh"','name_kh' => 'ព្រែកខ្សាយ ខ','district_id'=>143]);
				\DB::table('communes')->insert(['name_en' => 'Prey Kandieng','name_kh' => 'ព្រៃកណ្ដៀង','district_id'=>143]);
				
			//Preah Sdach
				\DB::table('communes')->insert(['name_en' => 'Angkor Reach','name_kh' => 'អង្គររាជ្យ','district_id'=>144]);
				\DB::table('communes')->insert(['name_en' => 'Banteay Chakrei','name_kh' => 'បន្ទាយចក្រី','district_id'=>144]);
				\DB::table('communes')->insert(['name_en' => 'Beung Doal','name_kh' => 'បឹងដោល','district_id'=>144]);
				\DB::table('communes')->insert(['name_en' => 'Chey Kompork','name_kh' => 'ជៃកំពក','district_id'=>144]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Singh','name_kh' => 'កំពង់សឹង','district_id'=>144]);
				\DB::table('communes')->insert(['name_en' => 'Krang Svay','name_kh' => 'ក្រាំងស្វាយ','district_id'=>144]);
				\DB::table('communes')->insert(['name_en' => 'Lvea','name_kh' => 'ល្វា','district_id'=>144]);
				\DB::table('communes')->insert(['name_en' => 'Preah Sdach','name_kh' => 'ព្រះស្តេច','district_id'=>144]);
				\DB::table('communes')->insert(['name_en' => 'Reathor','name_kh' => 'រាធរ','district_id'=>144]);
				\DB::table('communes')->insert(['name_en' => 'Romchek','name_kh' => 'រំចេក','district_id'=>144]);
				\DB::table('communes')->insert(['name_en' => 'Sena Reach Udom','name_kh' => 'សេនារាជឧត្តម','district_id'=>144]);
			
			//Me Sang
				\DB::table('communes')->insert(['name_en' => 'Angkor Sar','name_kh' => 'អង្គរសរ','district_id'=>145]);
				\DB::table('communes')->insert(['name_en' => 'Chres ','name_kh' => 'ច្រេស','district_id'=>145]);
				\DB::table('communes')->insert(['name_en' => 'Chi Phoch','name_kh' => 'ជីផុច','district_id'=>145]);
				\DB::table('communes')->insert(['name_en' => 'Prey Khnes','name_kh' => 'ព្រៃឃ្នេស','district_id'=>145]);
				\DB::table('communes')->insert(['name_en' => 'Prey Rumdeng','name_kh' => 'ព្រៃរំដេង','district_id'=>145]);
				\DB::table('communes')->insert(['name_en' => 'Prey Totueng','name_kh' => 'ព្រៃទទឹង','district_id'=>145]);
				\DB::table('communes')->insert(['name_en' => 'Svay Chrum','name_kh' => 'ស្វាយជ្រុំ','district_id'=>145]);
				\DB::table('communes')->insert(['name_en' => 'Trapeang Srae','name_kh' => 'ត្រពាំងស្រែ','district_id'=>145]);
			
			//Pea Reang
				\DB::table('communes')->insert(['name_en' => 'Kampong Popil','name_kh' => 'កំពង់ពពិល','district_id'=>146]);
				\DB::table('communes')->insert(['name_en' => 'Kanhcham','name_kh' => 'កញ្ចំ','district_id'=>146]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Prang','name_kh' => 'កំពង់ប្រាំង','district_id'=>146]);
				\DB::table('communes')->insert(['name_en' => 'Mesar Prachan','name_kh' => 'មេសរប្រចាន់','district_id'=>146]);
				\DB::table('communes')->insert(['name_en' => 'Prey Pnov','name_kh' => 'ព្រៃព្នៅ','district_id'=>146]);
				\DB::table('communes')->insert(['name_en' => 'Prey Sniet','name_kh' => 'ព្រៃស្នៀត','district_id'=>146]);
				\DB::table('communes')->insert(['name_en' => 'Prey Sralet','name_kh' => 'ព្រៃស្រឡិត','district_id'=>146]);
				\DB::table('communes')->insert(['name_en' => 'Reab','name_kh' => 'រាប','district_id'=>146]);
				\DB::table('communes')->insert(['name_en' => 'Roka','name_kh' => 'រកា','district_id'=>146]);
			
			//Kamchay Mear
				\DB::table('communes')->insert(['name_en' => 'Cheach','name_kh' => 'ជាច','district_id'=>147]);
				\DB::table('communes')->insert(['name_en' => 'Daun Keung','name_kh' => 'ដូនកឹង','district_id'=>147]);
				\DB::table('communes')->insert(['name_en' => 'Kra Nhoung','name_kh' => 'ក្រញូង','district_id'=>147]);
				\DB::table('communes')->insert(['name_en' => 'Krabao','name_kh' => 'ក្របៅ','district_id'=>147]);
				\DB::table('communes')->insert(['name_en' => 'Seang Khveang','name_kh' => 'ស៊ាងឃ្វាង','district_id'=>147]);
				\DB::table('communes')->insert(['name_en' => 'Smoang Khang Cheung','name_kh' => 'ស្មោងខាងជើង','district_id'=>147]);
				\DB::table('communes')->insert(['name_en' => 'Smoang Khang Tbong','name_kh' => 'ស្មោងខាងត្បូង','district_id'=>147]);
				\DB::table('communes')->insert(['name_en' => 'Trabaek','name_kh' => 'ត្របែក','district_id'=>147]);
				
			//Prey Veaeng
				\DB::table('communes')->insert(['name_en' => 'Angkor Tret','name_kh' => 'អង្គរទ្រេត','district_id'=>148]);
				\DB::table('communes')->insert(['name_en' => 'Chea Khlang','name_kh' => 'ជាខ្លាង','district_id'=>148]);
				\DB::table('communes')->insert(['name_en' => 'Chrey','name_kh' => 'ជ្រៃ','district_id'=>148]);
				\DB::table('communes')->insert(['name_en' => 'Dam Reyporn','name_kh' => 'ដំរីពួន','district_id'=>148]);
				\DB::table('communes')->insert(['name_en' => 'Me Bun','name_kh' => 'មេបុណ្យ','district_id'=>148]);
				\DB::table('communes')->insert(['name_en' => 'Pean Roung','name_kh' => 'ពានរោង','district_id'=>148]);
				\DB::table('communes')->insert(['name_en' => 'Po Poes','name_kh' => 'ពពឺស','district_id'=>148]);
				\DB::table('communes')->insert(['name_en' => 'Prey Khla','name_kh' => 'ព្រៃខ្លា','district_id'=>148]);
				\DB::table('communes')->insert(['name_en' => 'Sam Roung','name_kh' => 'សំរោង','district_id'=>148]);
				\DB::table('communes')->insert(['name_en' => 'Svay Antor','name_kh' => 'ស្វាយអន្ទរ','district_id'=>148]);
				\DB::table('communes')->insert(['name_en' => 'Teok Thla','name_kh' => 'ទឹកថ្លា','district_id'=>148]);
				
			//Peam Chor
				\DB::table('communes')->insert(['name_en' => 'Angkor Angk','name_kh' => 'អង្គរអង្គ','district_id'=>149]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Brasat','name_kh' => 'កំពង់ប្រាសាទ','district_id'=>149]);
				\DB::table('communes')->insert(['name_en' => 'Koh Chek','name_kh' => 'កោះចេក','district_id'=>149]);
				\DB::table('communes')->insert(['name_en' => 'Koh Roka','name_kh' => 'កោះរកា','district_id'=>149]);
				\DB::table('communes')->insert(['name_en' => 'Koh Sompov','name_kh' => 'កោះសំពៅ','district_id'=>149]);
				\DB::table('communes')->insert(['name_en' => 'Krang Tayorng','name_kh' => 'ក្រាំងតាយ៉ង','district_id'=>149]);
				\DB::table('communes')->insert(['name_en' => 'Praek Krabau','name_kh' => 'ព្រែកក្របៅ','district_id'=>149]);
				\DB::table('communes')->insert(['name_en' => 'Russei Srok','name_kh' => 'ព្រែកសំបូរ','district_id'=>149]);
				\DB::table('communes')->insert(['name_en' => 'Praek Sombour','name_kh' => 'ឫស្សីស្រុក','district_id'=>149]);
				\DB::table('communes')->insert(['name_en' => 'Svay Phlous','name_kh' => 'ស្វាយភ្លោះ','district_id'=>149]);
				
			//Kampong Trabaek
				\DB::table('communes')->insert(['name_en' => 'Ansaong','name_kh' => 'អន្សោង','district_id'=>150]);
				\DB::table('communes')->insert(['name_en' => 'Cham','name_kh' => 'ចាម','district_id'=>150]);
				\DB::table('communes')->insert(['name_en' => 'Cheang Daek','name_kh' => 'ជាងដែក','district_id'=>150]);
				\DB::table('communes')->insert(['name_en' => 'Chrey ','name_kh' => 'ជ្រៃ','district_id'=>150]);
				\DB::table('communes')->insert(['name_en' => 'Kansoam Ak','name_kh' => 'កន្សោមអក','district_id'=>150]);
				\DB::table('communes')->insert(['name_en' => 'Kou Khchak','name_kh' => 'គោខ្ចក','district_id'=>150]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Trabaek','name_kh' => 'កំពង់ត្របែក','district_id'=>150]);
				\DB::table('communes')->insert(['name_en' => 'Peam Montear','name_kh' => 'ពាមមន្ទារ','district_id'=>150]);
				\DB::table('communes')->insert(['name_en' => 'Pratheat ','name_kh' => 'ប្រាសាទ','district_id'=>150]);
				\DB::table('communes')->insert(['name_en' => 'Pratheat ','name_kh' => 'ប្រធាតុ','district_id'=>150]);
				\DB::table('communes')->insert(['name_en' => 'Prey Chhor','name_kh' => 'ព្រៃឈរ','district_id'=>150]);
				\DB::table('communes')->insert(['name_en' => 'Prey Poun','name_kh' => 'ព្រៃពោន','district_id'=>150]);
				\DB::table('communes')->insert(['name_en' => 'Thkov','name_kh' => 'ថ្កូវ','district_id'=>150]);
			
			//Por Reang
				\DB::table('communes')->insert(['name_en' => 'Por Reang','name_kh' => 'ពោធិ៍រៀង','district_id'=>151]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Russei','name_kh' => 'កំពង់ឬស្សី','district_id'=>151]);
				\DB::table('communes')->insert(['name_en' => 'Preak Anteah','name_kh' => 'ព្រែកអន្ទះ','district_id'=>151]);
				\DB::table('communes')->insert(['name_en' => 'Praek Chrey','name_kh' => 'ព្រែកជ្រៃ','district_id'=>151]);
				\DB::table('communes')->insert(['name_en' => 'Prey Kanloang','name_kh' => 'ព្រៃកន្លោង','district_id'=>151]);
				\DB::table('communes')->insert(['name_en' => 'Takor','name_kh' => 'តាកោ','district_id'=>151]);
				\DB::table('communes')->insert(['name_en' => 'Praek Tasor','name_kh' => 'ព្រែកតាសរ','district_id'=>151]);
				
			//Svay Ontor
				\DB::table('communes')->insert(['name_en' => 'Angkor Tret','name_kh' => 'អង្គរទ្រេត','district_id'=>152]);
				\DB::table('communes')->insert(['name_en' => 'Chea Khlang','name_kh' => 'ជាខ្លាង','district_id'=>152]);
				\DB::table('communes')->insert(['name_en' => 'Chrey','name_kh' => 'ជ្រៃ','district_id'=>152]);
				\DB::table('communes')->insert(['name_en' => 'Dam Reyporn','name_kh' => 'ដំរីពួន','district_id'=>152]);
				\DB::table('communes')->insert(['name_en' => 'Me Bun','name_kh' => 'មេបុណ្យ','district_id'=>152]);
				\DB::table('communes')->insert(['name_en' => 'Pean Roung','name_kh' => 'ពានរោង','district_id'=>152]);
				\DB::table('communes')->insert(['name_en' => 'Po Poes','name_kh' => 'ពពឺស','district_id'=>152]);
				\DB::table('communes')->insert(['name_en' => 'Prey Khla','name_kh' => 'ព្រៃខ្លា','district_id'=>152]);
				\DB::table('communes')->insert(['name_en' => 'Sam Roung','name_kh' => 'សំរោង','district_id'=>152]);
				\DB::table('communes')->insert(['name_en' => 'Svay Antor','name_kh' => 'ស្វាយអន្ទរ','district_id'=>152]);
				\DB::table('communes')->insert(['name_en' => 'Teok Thla','name_kh' => 'ទឹកថ្លា','district_id'=>152]);

		//Pursat
			//Bakan
				\DB::table('communes')->insert(['name_en' => 'Beung Bot Kandal','name_kh' => 'បឹងបត់កណ្តោល','district_id'=>153]);
				\DB::table('communes')->insert(['name_en' => 'Beung Khnar','name_kh' => 'បឹងខ្នារ','district_id'=>153]);
				\DB::table('communes')->insert(['name_en' => 'Khnar Toteung','name_kh' => 'ខ្នារទទឹង','district_id'=>153]);
				\DB::table('communes')->insert(['name_en' => 'Meteuk','name_kh' => 'មេទឹក','district_id'=>153]);
				\DB::table('communes')->insert(['name_en' => 'Or Tapoang','name_kh' => 'អូរតាប៉ោង','district_id'=>153]);
				\DB::table('communes')->insert(['name_en' => 'Romlech','name_kh' => 'រំលេច','district_id'=>153]);
				\DB::table('communes')->insert(['name_en' => 'Snam Preah','name_kh' => 'ស្នាមព្រះ','district_id'=>153]);
				\DB::table('communes')->insert(['name_en' => 'Svay Daunkeo','name_kh' => 'ស្វាយដូនកែវ','district_id'=>153]);
				\DB::table('communes')->insert(['name_en' => 'Talor','name_kh' => 'តាលោ','district_id'=>153]);
				\DB::table('communes')->insert(['name_en' => 'Trapeang Chorng','name_kh' => 'ត្រពាំងជង','district_id'=>153]);
			
			//Krakor
				\DB::table('communes')->insert(['name_en' => 'Anlong Tnoat','name_kh' => 'អន្លង់ត្នោត','district_id'=>154]);
				\DB::table('communes')->insert(['name_en' => 'Anlong jan','name_kh' => 'អន្លង់ចាន់','district_id'=>154]);
				\DB::table('communes')->insert(['name_en' => 'Ansa Chambok','name_kh' => 'អន្សាចំបក់','district_id'=>154]);
				\DB::table('communes')->insert(['name_en' => 'Beung Kantout','name_kh' => 'បឹងកន្ទួត','district_id'=>154]);
				\DB::table('communes')->insert(['name_en' => 'Chheu Tom','name_kh' => 'ឈើតុំ','district_id'=>154]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Loung','name_kh' => 'កំពង់ហ្លួង','district_id'=>154]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Por','name_kh' => 'កំពង់ពោធិ','district_id'=>154]);
				\DB::table('communes')->insert(['name_en' => 'Kbal Trach','name_kh' => 'ក្បាលត្រាច','district_id'=>154]);
				\DB::table('communes')->insert(['name_en' => 'Or Sandann','name_kh' => 'អូរសណ្តាន់','district_id'=>154]);
				\DB::table('communes')->insert(['name_en' => 'Sna Ansa','name_kh' => 'ស្នាអន្សា','district_id'=>154]);
				\DB::table('communes')->insert(['name_en' => 'Svay Sor','name_kh' => 'ស្វាយស','district_id'=>154]);
				\DB::table('communes')->insert(['name_en' => 'Tnoat Chum','name_kh' => 'ត្នោតជុំ','district_id'=>154]);
				
			//Krong Pursat
				\DB::table('communes')->insert(['name_en' => 'Chomreun Phal','name_kh' => 'ចម្រើនផល','district_id'=>155]);
				\DB::table('communes')->insert(['name_en' => 'Lolok Sor','name_kh' => 'លលកស','district_id'=>155]);
				\DB::table('communes')->insert(['name_en' => 'Pteah Prey','name_kh' => 'ផ្ទះព្រៃ','district_id'=>155]);
				\DB::table('communes')->insert(['name_en' => 'Prey Nhi','name_kh' => 'ព្រៃញ្ញី','district_id'=>155]);
				\DB::table('communes')->insert(['name_en' => 'Roleab','name_kh' => 'រលាប','district_id'=>155]);
				\DB::table('communes')->insert(['name_en' => 'Svay Att','name_kh' => 'ស្វាយអាត់','district_id'=>155]);
				\DB::table('communes')->insert(['name_en' => 'Banteay Dei','name_kh' => 'បន្ទាយដៃ','district_id'=>155]);
			
			//Kandieng
				\DB::table('communes')->insert(['name_en' => 'Anlong Vil','name_kh' => 'អន្លូងវិល','district_id'=>156]);
				\DB::table('communes')->insert(['name_en' => 'Banteay dei','name_kh' => 'បន្ទាយដី','district_id'=>156]);
				\DB::table('communes')->insert(['name_en' => 'Kandieng','name_kh' => 'កណ្តៀង','district_id'=>156]);
				\DB::table('communes')->insert(['name_en' => 'Sre Sdok','name_kh' => 'ស្រែស្តុក','district_id'=>156]);
				\DB::table('communes')->insert(['name_en' => 'Sya','name_kh' => 'ស្យា','district_id'=>156]);
				\DB::table('communes')->insert(['name_en' => 'Veal','name_kh' => 'វាល','district_id'=>156]);
				\DB::table('communes')->insert(['name_en' => 'Kanhchor','name_kh' => 'កញ្ឆរ','district_id'=>156]);
				\DB::table('communes')->insert(['name_en' => 'Sunlong','name_kh' => 'សន្លុង','district_id'=>156]);
				\DB::table('communes')->insert(['name_en' => 'Reang Til','name_kh' => 'រៀងទីល','district_id'=>156]);
				\DB::table('communes')->insert(['name_en' => 'Svay Loung','name_kh' => 'ស្វាយលុង','district_id'=>156]);
				\DB::table('communes')->insert(['name_en' => 'Koh Chum','name_kh' => 'កោះឆុម','district_id'=>156]);
			
			//Phnum Kravanh
				\DB::table('communes')->insert(['name_en' => 'Bak Chenhchien','name_kh' => 'បាក់ចិញ្ចៀន','district_id'=>157]);
				\DB::table('communes')->insert(['name_en' => 'Leach','name_kh' => 'លាច','district_id'=>157]);
				\DB::table('communes')->insert(['name_en' => 'Phteah Rung','name_kh' => 'ផ្ទះរុង','district_id'=>157]);
				\DB::table('communes')->insert(['name_en' => 'Prongil ','name_kh' => 'ព្រងិល','district_id'=>157]);
				\DB::table('communes')->insert(['name_en' => 'Rokat','name_kh' => 'រកាត','district_id'=>157]);
				\DB::table('communes')->insert(['name_en' => 'Santreae ','name_kh' => 'សន្ទ្រែ','district_id'=>157]);
				\DB::table('communes')->insert(['name_en' => 'Samraong ','name_kh' => 'សំរោង','district_id'=>157]);
				
			 //Veal Veaeng
				\DB::table('communes')->insert(['name_en' => 'Anlong Reab','name_kh' => 'អន្លង់រាប','district_id'=>158]);
				\DB::table('communes')->insert(['name_en' => 'Kropeu 2','name_kh' => 'ក្រពើពីរ','district_id'=>158]);
				\DB::table('communes')->insert(['name_en' => 'Or Sorm','name_kh' => 'អូរសោម','district_id'=>158]);
				\DB::table('communes')->insert(['name_en' => 'Bromoay','name_kh' => 'ប្រម៉ោយ','district_id'=>158]);
				\DB::table('communes')->insert(['name_en' => 'Thma Da','name_kh' => 'ថ្មដា','district_id'=>158]);
				
		//Ratanakiri
			//Andoung Meas
				\DB::table('communes')->insert(['name_en' => 'Malik','name_kh' => 'ម៉ាលិក','district_id'=>159]);
				\DB::table('communes')->insert(['name_en' => 'Nhang','name_kh' => 'ញ៉ាង','district_id'=>159]);
				\DB::table('communes')->insert(['name_en' => 'Ta Lav','name_kh' => 'តាឡាវ','district_id'=>159]);
			
			//Koun Mom
				\DB::table('communes')->insert(['name_en' => 'Serei Mongkol','name_kh' => 'សិរីមង្គល','district_id'=>160]);
				\DB::table('communes')->insert(['name_en' => 'Srae Angkrorng','name_kh' => 'ស្រែអង្គ្រង','district_id'=>160]);
				\DB::table('communes')->insert(['name_en' => 'Ta Ang','name_kh' => 'តាអង','district_id'=>160]);
				\DB::table('communes')->insert(['name_en' => 'Teun','name_kh' => 'តឺន','district_id'=>160]);
				\DB::table('communes')->insert(['name_en' => 'Trapeang Chres','name_kh' => 'ត្រពាំងច្រេស','district_id'=>160]);
				\DB::table('communes')->insert(['name_en' => 'Trapeang Kraham','name_kh' => 'ត្រពាំងក្រហម','district_id'=>160]);
				
			//Ou Chum
				\DB::table('communes')->insert(['name_en' => 'Cha Ung','name_kh' => 'ចាអ៊ុង','district_id'=>161]);
				\DB::table('communes')->insert(['name_en' => 'Pouy','name_kh' => 'ប៉ូយ','district_id'=>161]);
				\DB::table('communes')->insert(['name_en' => 'Aekakpheap','name_kh' => 'ឯកភាព','district_id'=>161]);
				\DB::table('communes')->insert(['name_en' => 'Kalai','name_kh' => 'កាឡៃ','district_id'=>161]);
				\DB::table('communes')->insert(['name_en' => 'Ou Chum','name_kh' => 'អូរជុំ','district_id'=>161]);
				\DB::table('communes')->insert(['name_en' => 'Sameakki','name_kh' => 'សាមគ្គី','district_id'=>161]);
				\DB::table('communes')->insert(['name_en' => 'La ak','name_kh' => 'ល្អក់','district_id'=>161]);
				
			//Ta Veaeng
				\DB::table('communes')->insert(['name_en' => 'Ta Veang Leu','name_kh' => 'តាវែងលើ','district_id'=>162]);
				\DB::table('communes')->insert(['name_en' => 'Ta Veang Kroam','name_kh' => 'តាវែងក្រោម','district_id'=>162]);
				
			//Krong Banlung
				\DB::table('communes')->insert(['name_en' => 'Kachanh','name_kh' => 'កាចាញ','district_id'=>163]);
				\DB::table('communes')->insert(['name_en' => 'Labanseik','name_kh' => 'ឡាបានសៀក','district_id'=>163]);
				\DB::table('communes')->insert(['name_en' => 'Yeakh Loam','name_kh' => 'យក្សឡោម','district_id'=>163]);
				\DB::table('communes')->insert(['name_en' => 'Beung Kanseng','name_kh' => 'បឹងកន្សែង','district_id'=>163]);
			
			//Lumphat
				\DB::table('communes')->insert(['name_en' => 'Chey Otdam','name_kh' => 'ជ័យឧត្ដម','district_id'=>164]);
				\DB::table('communes')->insert(['name_en' => 'Ka Laeng ','name_kh' => 'កាឡែង','district_id'=>164]);
				\DB::table('communes')->insert(['name_en' => 'Lbang Muoy','name_kh' => 'បាំង១','district_id'=>164]);
				\DB::table('communes')->insert(['name_en' => 'Lbang Pir','name_kh' => 'ល្បាំង២','district_id'=>164]);
				\DB::table('communes')->insert(['name_en' => 'Ba Tang','name_kh' => 'បាតាង','district_id'=>164]);
				\DB::table('communes')->insert(['name_en' => 'Seda','name_kh' => 'សេដា','district_id'=>164]);
				
			//Ou Ya Dav
				\DB::table('communes')->insert(['name_en' => 'Bar Kham','name_kh' => 'បរខាំ','district_id'=>165]);
				\DB::table('communes')->insert(['name_en' => 'Lun Choar','name_kh' => 'លំជ័រ','district_id'=>165]);
				\DB::table('communes')->insert(['name_en' => 'Pork Nhai','name_kh' => 'ប៉ក់ញ៉ៃ','district_id'=>165]);
				\DB::table('communes')->insert(['name_en' => 'Pate','name_kh' => 'ប៉ាតេ','district_id'=>165]);
				\DB::table('communes')->insert(['name_en' => 'Sesan','name_kh' => 'សេសាន','district_id'=>165]);
				\DB::table('communes')->insert(['name_en' => 'Soam Thum','name_kh' => 'សោមធំ','district_id'=>165]);
				\DB::table('communes')->insert(['name_en' => 'Yatung','name_kh' => 'យ៉ាទុង','district_id'=>165]);
				
			//Bar Kaev
				\DB::table('communes')->insert(['name_en' => 'Kak','name_kh' => 'កក់','district_id'=>166]);
				\DB::table('communes')->insert(['name_en' => 'Keh Chong','name_kh' => 'កិះចុង','district_id'=>166]);
				\DB::table('communes')->insert(['name_en' => 'La Minh','name_kh' => 'ឡាមីញ','district_id'=>166]);
				\DB::table('communes')->insert(['name_en' => 'Lung Khung','name_kh' => 'លុងឃុង','district_id'=>166]);
				\DB::table('communes')->insert(['name_en' => 'Saeung','name_kh' => 'ស៊ើង','district_id'=>166]);
				\DB::table('communes')->insert(['name_en' => 'Ting Chak','name_kh' => 'ទីងចាក់','district_id'=>166]);
				
		//Svay Rieng
			//Chantrea
				\DB::table('communes')->insert(['name_en' => 'Bati','name_kh' => 'បាទី','district_id'=>172]);
				\DB::table('communes')->insert(['name_en' => 'Bavit','name_kh' => 'បាវិត','district_id'=>172]);
				\DB::table('communes')->insert(['name_en' => 'Chantrea','name_kh' => 'ចន្ទ្រា','district_id'=>172]);
				\DB::table('communes')->insert(['name_en' => 'Chres','name_kh' => 'ច្រេស','district_id'=>172]);
				\DB::table('communes')->insert(['name_en' => 'Mesar Thgnork','name_kh' => 'មេសរថ្ងក','district_id'=>172]);
				\DB::table('communes')->insert(['name_en' => 'Prasat','name_kh' => 'ប្រាសាទ','district_id'=>172]);
				\DB::table('communes')->insert(['name_en' => 'Prey Angkunh','name_kh' => 'ព្រៃអង្គុញ','district_id'=>172]);
				\DB::table('communes')->insert(['name_en' => 'Prey Kokir','name_kh' => 'ព្រៃគគីរ','district_id'=>172]);
				\DB::table('communes')->insert(['name_en' => 'Somroang','name_kh' => 'សំរោង','district_id'=>172]);
				\DB::table('communes')->insert(['name_en' => 'Toul Sdei','name_kh' => 'ទួលស្តី','district_id'=>172]);
			
			//Rumduol
				\DB::table('communes')->insert(['name_en' => 'Bos Mon','name_kh' => 'បុសមន','district_id'=>173]);
				\DB::table('communes')->insert(['name_en' => 'Thmea','name_kh' => 'ធ្មា','district_id'=>173]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Chork','name_kh' => 'កំពង់ចក','district_id'=>173]);
				\DB::table('communes')->insert(['name_en' => 'Chrong Popel','name_kh' => 'ជ្រុងពពេល','district_id'=>173]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Ampel','name_kh' => 'កំពង់អំពិល','district_id'=>173]);
				\DB::table('communes')->insert(['name_en' => 'Meun Chey','name_kh' => 'ម៉ឺនជ័យ','district_id'=>173]);
				\DB::table('communes')->insert(['name_en' => 'Porng Teuk','name_kh' => 'ពងទឹក','district_id'=>173]);
				\DB::table('communes')->insert(['name_en' => 'Sangke','name_kh' => 'សង្កែ','district_id'=>173]);
				\DB::table('communes')->insert(['name_en' => 'Svay Chek','name_kh' => 'ស្វាយចេក','district_id'=>173]);
				\DB::table('communes')->insert(['name_en' => 'Thna Thnung','name_kh' => 'ថ្នាធ្នង់','district_id'=>173]);
			
			//Svay Chrum
				\DB::table('communes')->insert(['name_en' => 'Angk Ta Sou','name_kh' => 'អង្គតាសូ','district_id'=>174]);
				\DB::table('communes')->insert(['name_en' => 'Basak','name_kh' => 'បាសាក់','district_id'=>174]);
				\DB::table('communes')->insert(['name_en' => 'Chambak','name_kh' => 'ចំបក់','district_id'=>174]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Chamlang','name_kh' => 'កំពង់ចំឡង','district_id'=>174]);
				\DB::table('communes')->insert(['name_en' => 'Ta Suos','name_kh' => 'តាសួស','district_id'=>174]);
				\DB::table('communes')->insert(['name_en' => 'Chheu Teal','name_kh' => 'ឈើទាល','district_id'=>174]);
				\DB::table('communes')->insert(['name_en' => 'Doun Sa','name_kh' => 'ដូនស','district_id'=>174]);
				\DB::table('communes')->insert(['name_en' => 'Kouk Pring','name_kh' => 'គោកព្រីង','district_id'=>174]);
				\DB::table('communes')->insert(['name_en' => 'Kraol Kou','name_kh' => 'ក្រោលគោ','district_id'=>174]);
				\DB::table('communes')->insert(['name_en' => 'Kruos','name_kh' => 'គ្រួស','district_id'=>174]);
				\DB::table('communes')->insert(['name_en' => 'Pouthi Reach','name_kh' => 'ពោធិរាជ','district_id'=>174]);
				\DB::table('communes')->insert(['name_en' => 'Svay Angk','name_kh' => 'ស្វាយអង្គ','district_id'=>174]);
				\DB::table('communes')->insert(['name_en' => 'Svay Chrum','name_kh' => 'ស្វាយជ្រំ','district_id'=>174]);
				\DB::table('communes')->insert(['name_en' => 'Svay Thum','name_kh' => 'ស្វាយធំ','district_id'=>174]);
				\DB::table('communes')->insert(['name_en' => 'Svay Yea','name_kh' => 'ស្វាយយា','district_id'=>174]);
				\DB::table('communes')->insert(['name_en' => 'Thlok','name_kh' => 'ធ្លក','district_id'=>174]);
				
			//Svay Teab
				\DB::table('communes')->insert(['name_en' => 'Chrok Mtas','name_kh' => 'ច្រកម្ទេស','district_id'=>175]);
				\DB::table('communes')->insert(['name_en' => 'Kokir Soam','name_kh' => 'គគីសោម','district_id'=>175]);
				\DB::table('communes')->insert(['name_en' => 'Kandiang Reay','name_kh' => 'កណ្តៀងរាយ','district_id'=>175]);
				\DB::table('communes')->insert(['name_en' => 'Monorom','name_kh' => 'មនោរម្យ','district_id'=>175]);
				\DB::table('communes')->insert(['name_en' => 'Popaet','name_kh' => 'ពពែត','district_id'=>175]);
				\DB::table('communes')->insert(['name_en' => 'Prey Ta Ei','name_kh' => 'ព្រៃតាអី','district_id'=>175]);
				\DB::table('communes')->insert(['name_en' => 'Brosotr','name_kh' => 'ប្រសូត្រ','district_id'=>175]);
				\DB::table('communes')->insert(['name_en' => 'Romeang Tkorl','name_kh' => 'រមាំងថ្កោល','district_id'=>175]);
				\DB::table('communes')->insert(['name_en' => 'Sambour','name_kh' => 'សំបួរ','district_id'=>175]);
				\DB::table('communes')->insert(['name_en' => 'Song Koer','name_kh' => 'សង្ឃ័រ','district_id'=>175]);
				\DB::table('communes')->insert(['name_en' => 'Svay Rompear','name_kh' => 'ស្វាយរំពារ','district_id'=>175]);
			
			//Kampong Rou
				\DB::table('communes')->insert(['name_en' => 'Banteay Krang','name_kh' => 'បន្ទាយក្រាំង','district_id'=>176]);
				\DB::table('communes')->insert(['name_en' => 'Nhor','name_kh' => 'ញរ','district_id'=>176]);
				\DB::table('communes')->insert(['name_en' => 'Ksetr','name_kh' => 'ខ្សែត្រ','district_id'=>176]);
				\DB::table('communes')->insert(['name_en' => 'Preah Ponlea','name_kh' => 'ព្រះពន្លា','district_id'=>176]);
				\DB::table('communes')->insert(['name_en' => 'Chrey Thom','name_kh' => 'ព្រៃធំ','district_id'=>176]);
				\DB::table('communes')->insert(['name_en' => 'Reach Monti','name_kh' => 'រាជមន្ទីរ','district_id'=>176]);
				\DB::table('communes')->insert(['name_en' => 'Somlei','name_kh' => 'សំឡី','district_id'=>176]);
				\DB::table('communes')->insert(['name_en' => 'Somyorng','name_kh' => 'សំយ៉ោង','district_id'=>176]);
				\DB::table('communes')->insert(['name_en' => 'Svay Tayean','name_kh' => 'ស្វាយតាយាន','district_id'=>176]);
				\DB::table('communes')->insert(['name_en' => 'Svay Tour','name_kh' => 'ស្វាយតឿ','district_id'=>176]);
				\DB::table('communes')->insert(['name_en' => 'Tnaot','name_kh' => 'ត្នោត','district_id'=>176]);
			
			//Romeas Haek
				\DB::table('communes')->insert(['name_en' => 'Ampel','name_kh' => 'អំពិល','district_id'=>177]);
				\DB::table('communes')->insert(['name_en' => 'Andong Pou','name_kh' => 'អណ្តូងពោធិ៍','district_id'=>177]);
				\DB::table('communes')->insert(['name_en' => 'Andong Trabaek','name_kh' => 'អណ្តូងត្របែក','district_id'=>177]);
				\DB::table('communes')->insert(['name_en' => 'Angk Brosrae','name_kh' => 'អង្គប្រស្រែ','district_id'=>177]);
				\DB::table('communes')->insert(['name_en' => 'Chnatrei','name_kh' => 'ចន្ត្រី','district_id'=>177]);
				\DB::table('communes')->insert(['name_en' => 'Chrey Thom','name_kh' => 'ជ្រៃធំ','district_id'=>177]);
				\DB::table('communes')->insert(['name_en' => 'Daung','name_kh' => 'ដូង','district_id'=>177]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Trach','name_kh' => 'កំពង់ត្រាច','district_id'=>177]);
				\DB::table('communes')->insert(['name_en' => 'Kokir','name_kh' => 'គគីរ','district_id'=>177]);
				\DB::table('communes')->insert(['name_en' => 'Krasang','name_kh' => 'ក្រសាំង','district_id'=>177]);
				\DB::table('communes')->insert(['name_en' => 'Mukh Da','name_kh' => 'មុខដា','district_id'=>177]);
				\DB::table('communes')->insert(['name_en' => 'Mream','name_kh' => 'ម្រាម','district_id'=>177]);
				\DB::table('communes')->insert(['name_en' => 'Sambour','name_kh' => 'សំបួរ','district_id'=>177]);
				\DB::table('communes')->insert(['name_en' => 'Sambatt Meanchey','name_kh' => 'សម្បត្តិមានជ័យ','district_id'=>177]);
				\DB::table('communes')->insert(['name_en' => 'Trapeang Sdao','name_kh' => 'ត្រពាំងស្តៅ','district_id'=>177]);
				\DB::table('communes')->insert(['name_en' => 'Trors','name_kh' => 'ត្រស់','district_id'=>177]);
				
			//Krong Bavet
				\DB::table('communes')->insert(['name_en' => 'Bavet','name_kh' => 'បាវិត','district_id'=>178]);
				\DB::table('communes')->insert(['name_en' => 'Prey Angkunh','name_kh' => 'ព្រៃអង្គុញ','district_id'=>178]);
				\DB::table('communes')->insert(['name_en' => 'Bati','name_kh' => 'បាទី','district_id'=>178]);
				\DB::table('communes')->insert(['name_en' => 'Prasat','name_kh' => 'ប្រាសាទ','district_id'=>178]);
				\DB::table('communes')->insert(['name_en' => 'Chrork Mtesh','name_kh' => 'ច្រកម្ទេស','district_id'=>178]);
				
			//Krong Svay Rieng
				\DB::table('communes')->insert(['name_en' => 'Svay Teu','name_kh' => 'ស្វាយតឿ','district_id'=>179]);
				\DB::table('communes')->insert(['name_en' => 'Chek','name_kh' => 'ចេក','district_id'=>179]);
				\DB::table('communes')->insert(['name_en' => 'Svay Rieng','name_kh' => 'ស្វាយរៀង','district_id'=>179]);
				\DB::table('communes')->insert(['name_en' => 'Prey Chhlak','name_kh' => 'ព្រៃឆ្លាក់','district_id'=>179]);
				\DB::table('communes')->insert(['name_en' => 'Kory Trobaek','name_kh' => 'គយត្របែក','district_id'=>179]);
				\DB::table('communes')->insert(['name_en' => 'Pou Tahor','name_kh' => 'ពោធិ៍តាហោ','district_id'=>179]);
				\DB::table('communes')->insert(['name_en' => 'Sangkhor','name_kh' => 'សង្ឃ័រ','district_id'=>179]);

		//Takeo
			//Angkor Borei
				\DB::table('communes')->insert(['name_en' => 'Angkor Borei','name_kh' => 'អង្គរបូរី','district_id'=>180]);
				\DB::table('communes')->insert(['name_en' => 'Ba Srae','name_kh' => 'បាស្រែ','district_id'=>180]);
				\DB::table('communes')->insert(['name_en' => 'Kouk Thlok','name_kh' => 'គោកធ្លក','district_id'=>180]);
				\DB::table('communes')->insert(['name_en' => 'Ponley','name_kh' => 'ពន្លៃ','district_id'=>180]);
				\DB::table('communes')->insert(['name_en' => 'Preaek Phtoul','name_kh' => 'ព្រែកផ្ទោល','district_id'=>180]);
				\DB::table('communes')->insert(['name_en' => 'Prey Phkoam','name_kh' => 'ព្រៃផ្គាំ','district_id'=>180]);
			
			//Kiri Vong
				\DB::table('communes')->insert(['name_en' => 'Angk Brasat','name_kh' => 'អង្គប្រាសាទ','district_id'=>181]);
				\DB::table('communes')->insert(['name_en' => 'Preahbat Choarnchum','name_kh' => 'ព្រះបាទឈឿនជុំ','district_id'=>181]);
				\DB::table('communes')->insert(['name_en' => 'Komnob','name_kh' => 'កំណប់','district_id'=>181]);
				\DB::table('communes')->insert(['name_en' => 'Kompaeng','name_kh' => 'កំពែង','district_id'=>181]);
				\DB::table('communes')->insert(['name_en' => 'Kiri Chongkoh','name_kh' => 'គីរីចុងកោះ','district_id'=>181]);
				\DB::table('communes')->insert(['name_en' => 'Koak Prech','name_kh' => 'កក់ព្រិច','district_id'=>181]);
				\DB::table('communes')->insert(['name_en' => 'Phnom Den','name_kh' => 'ភ្នំឌិន','district_id'=>181]);
				\DB::table('communes')->insert(['name_en' => 'Prey Ampoak','name_kh' => 'ព្រៃអំពក','district_id'=>181]);
				\DB::table('communes')->insert(['name_en' => 'Prey Romdeng','name_kh' => 'ព្រៃរំដេង','district_id'=>181]);
				\DB::table('communes')->insert(['name_en' => 'Ream Ondeuk','name_kh' => 'រាមអនដឹក','district_id'=>181]);
				\DB::table('communes')->insert(['name_en' => 'Saom','name_kh' => 'សោម','district_id'=>181]);
				\DB::table('communes')->insert(['name_en' => 'Ta O','name_kh' => 'តាអូ','district_id'=>181]);
			
			//Samraong
				\DB::table('communes')->insert(['name_en' => 'Beung Tranh Khang Cheung','name_kh' => '','district_id'=>182]);
				\DB::table('communes')->insert(['name_en' => 'Beung Tranh Khang Tbong','name_kh' => '','district_id'=>182]);
				\DB::table('communes')->insert(['name_en' => 'Cheung Koun','name_kh' => '','district_id'=>182]);
				\DB::table('communes')->insert(['name_en' => 'Chomreah Pen','name_kh' => '','district_id'=>182]);
				\DB::table('communes')->insert(['name_en' => 'Khvav','name_kh' => '','district_id'=>182]);
				\DB::table('communes')->insert(['name_en' => 'Lomchong','name_kh' => '','district_id'=>182]);
				\DB::table('communes')->insert(['name_en' => 'Roveang','name_kh' => '','district_id'=>182]);
				\DB::table('communes')->insert(['name_en' => 'Somraong','name_kh' => '','district_id'=>182]);
				\DB::table('communes')->insert(['name_en' => 'Singh','name_kh' => '','district_id'=>182]);
				\DB::table('communes')->insert(['name_en' => 'Sla','name_kh' => '','district_id'=>182]);
				\DB::table('communes')->insert(['name_en' => 'Lvea','name_kh' => '','district_id'=>182]);
			
			//Treang
				\DB::table('communes')->insert(['name_en' => 'Angkanh','name_kh' => 'អង្កាញ់','district_id'=>183]);
				\DB::table('communes')->insert(['name_en' => 'Angk Khnaor','name_kh' => 'អង្គខ្នុរ','district_id'=>183]);
				\DB::table('communes')->insert(['name_en' => 'Chi Khmar','name_kh' => 'ជីខ្មា','district_id'=>183]);
				\DB::table('communes')->insert(['name_en' => 'Khvav','name_kh' => 'ខ្វាវ','district_id'=>183]);
				\DB::table('communes')->insert(['name_en' => 'Prambei Mom','name_kh' => 'ប្រាំបីមុំ','district_id'=>183]);
				\DB::table('communes')->insert(['name_en' => 'Angk Kaev','name_kh' => 'អង្គកែវ','district_id'=>183]);
				\DB::table('communes')->insert(['name_en' => 'Prey Sloek','name_kh' => 'ព្រៃស្លឹក','district_id'=>183]);
				\DB::table('communes')->insert(['name_en' => 'Roneam','name_kh' => 'រនាម','district_id'=>183]);
				\DB::table('communes')->insert(['name_en' => 'Sambuor','name_kh' => 'សំបួរ','district_id'=>183]);
				\DB::table('communes')->insert(['name_en' => 'Sanlung','name_kh' => 'សន្លុង','district_id'=>183]);
				\DB::table('communes')->insert(['name_en' => 'Smaong','name_kh' => 'ស្មោង','district_id'=>183]);
				\DB::table('communes')->insert(['name_en' => 'Srangae','name_kh' => 'ស្រង៉ែ','district_id'=>183]);
				\DB::table('communes')->insert(['name_en' => 'Thlok','name_kh' => 'ធ្លក','district_id'=>183]);
				\DB::table('communes')->insert(['name_en' => 'Tralach','name_kh' => 'ត្រឡាច','district_id'=>183]);
				
			//Bati
				\DB::table('communes')->insert(['name_en' => 'Chambak','name_kh' => 'ចំបក់','district_id'=>184]);
				\DB::table('communes')->insert(['name_en' => 'Champei','name_kh' => 'ចំប៉ី','district_id'=>184]);
				\DB::table('communes')->insert(['name_en' => 'Doung','name_kh' => 'ដូង','district_id'=>184]);
				\DB::table('communes')->insert(['name_en' => 'Kandoeng','name_kh' => 'កណ្តឹង','district_id'=>184]);
				\DB::table('communes')->insert(['name_en' => 'Komar Reachea','name_kh' => 'កុមាររាជា','district_id'=>184]);
				\DB::table('communes')->insert(['name_en' => 'Krang Leav','name_kh' => 'ក្រាំងលាវ','district_id'=>184]);
				\DB::table('communes')->insert(['name_en' => 'Krang thnong','name_kh' => 'ក្រាំងធ្នង់','district_id'=>184]);
				\DB::table('communes')->insert(['name_en' => 'Lumpong','name_kh' => 'លំពង់','district_id'=>184]);
				\DB::table('communes')->insert(['name_en' => 'Pea Ream','name_kh' => 'ពារាម','district_id'=>184]);
				\DB::table('communes')->insert(['name_en' => 'Pot Sar','name_kh' => 'ពត់សរ','district_id'=>184]);
				\DB::table('communes')->insert(['name_en' => 'Souphi','name_kh' => 'សូរភី','district_id'=>184]);
				\DB::table('communes')->insert(['name_en' => 'Tang Doung','name_kh' => 'តាំងដូង','district_id'=>184]);
				\DB::table('communes')->insert(['name_en' => 'Tnaot','name_kh' => 'ត្នោត','district_id'=>184]);
				\DB::table('communes')->insert(['name_en' => 'Trapeang Krasang','name_kh' => 'ត្រពាំងក្រសាំង','district_id'=>184]);
				\DB::table('communes')->insert(['name_en' => 'Trapeang Sab','name_kh' => 'ត្រពាំងសាប','district_id'=>184]);
			
			//Krong Doun Kaev
				\DB::table('communes')->insert(['name_en' => 'Baray','name_kh' => 'បារាយណ៍','district_id'=>185]);
				\DB::table('communes')->insert(['name_en' => 'Roka Knong','name_kh' => 'រកាក្នុង','district_id'=>185]);
				\DB::table('communes')->insert(['name_en' => 'Roka Krau','name_kh' => 'រកាក្រៅ','district_id'=>185]);
			
			//Kaoh Andaet
				\DB::table('communes')->insert(['name_en' => 'Krapum Chhuk','name_kh' => 'ក្រពុំឈូក','district_id'=>186]);
				\DB::table('communes')->insert(['name_en' => 'Pech Sar','name_kh' => 'ពេជសារ','district_id'=>186]);
				\DB::table('communes')->insert(['name_en' => 'Prey Khla','name_kh' => 'ព្រៃខ្លា','district_id'=>186]);
				\DB::table('communes')->insert(['name_en' => 'Prey Yuthka','name_kh' => 'ព្រៃយុថ្កា','district_id'=>186]);
				\DB::table('communes')->insert(['name_en' => 'Romenh','name_kh' => 'រមេញ','district_id'=>186]);
				\DB::table('communes')->insert(['name_en' => 'Thlea Prachum','name_kh' => 'ធ្លាប្រជុំ','district_id'=>186]);
			
			//Krong Doun Kaev
				\DB::table('communes')->insert(['name_en' => 'Baray','name_kh' => 'បារាយណ៍','district_id'=>187]);
				\DB::table('communes')->insert(['name_en' => 'Roka Knong','name_kh' => 'រកាក្នុង','district_id'=>187]);
				\DB::table('communes')->insert(['name_en' => 'Roka Krau','name_kh' => 'រកាក្រៅ','district_id'=>187]);
			
			//Tram Kak
				\DB::table('communes')->insert(['name_en' => 'Leay Bor','name_kh' => 'លាយបូរ','district_id'=>188]);
				\DB::table('communes')->insert(['name_en' => 'Angk Tasoam','name_kh' => 'អង្គតាសោម','district_id'=>188]);
				\DB::table('communes')->insert(['name_en' => 'Cheang Torng','name_kh' => 'ជាងទង','district_id'=>188]);
				\DB::table('communes')->insert(['name_en' => 'Kus','name_kh' => 'គុស','district_id'=>188]);
				\DB::table('communes')->insert(['name_en' => 'Leay Bor','name_kh' => 'លាយបូរ','district_id'=>188]);
				\DB::table('communes')->insert(['name_en' => 'Nhaeng Nhorng','name_kh' => 'ញ៉ែងញ៉ង','district_id'=>188]);
				\DB::table('communes')->insert(['name_en' => 'Ou Saray','name_kh' => 'អូរសារាយ','district_id'=>188]);
				\DB::table('communes')->insert(['name_en' => 'Udom Soriya','name_kh' => 'ឧត្តមសុរិយា','district_id'=>188]);
				\DB::table('communes')->insert(['name_en' => 'Popel','name_kh' => 'ពពេល','district_id'=>188]);
				\DB::table('communes')->insert(['name_en' => 'Samroang','name_kh' => 'សំរោង','district_id'=>188]);
				\DB::table('communes')->insert(['name_en' => 'Srae Ronoarng','name_kh' => 'ស្រែរនោង','district_id'=>188]);
				\DB::table('communes')->insert(['name_en' => 'Ta Phem','name_kh' => 'តាភេម','district_id'=>188]);
				\DB::table('communes')->insert(['name_en' => 'Tram Kak','name_kh' => 'ត្រាំកក់','district_id'=>188]);
				\DB::table('communes')->insert(['name_en' => 'Trapeang Thom Khang Cheung','name_kh' => 'ត្រពាំងធំខាងជើង','district_id'=>188]);
				\DB::table('communes')->insert(['name_en' => 'Trapeang Thom Khang Tbong','name_kh' => 'ត្រពាំងធំខាងត្បូង','district_id'=>188]);
				\DB::table('communes')->insert(['name_en' => 'Trapeang Kranhoung','name_kh' => 'ត្រពាំងក្រញូង','district_id'=>188]);
				
			//Prey Kabbas
				\DB::table('communes')->insert(['name_en' => 'Angkanh','name_kh' => 'អង្កាញ់','district_id'=>189]);
				\DB::table('communes')->insert(['name_en' => 'Ban Kam','name_kh' => 'បានកាម','district_id'=>189]);
				\DB::table('communes')->insert(['name_en' => 'Champa','name_kh' => 'ចំប៉ា','district_id'=>189]);
				\DB::table('communes')->insert(['name_en' => 'Char','name_kh' => 'ចារ','district_id'=>189]);
				\DB::table('communes')->insert(['name_en' => 'Kampeaeng','name_kh' => 'កំពែង','district_id'=>189]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Reab','name_kh' => 'កំពង់រាប','district_id'=>189]);
				\DB::table('communes')->insert(['name_en' => 'Kdanh','name_kh' => 'ក្តាញ់','district_id'=>189]);
				\DB::table('communes')->insert(['name_en' => 'Pou Rumchak','name_kh' => 'ពោធិ៍រំចាក','district_id'=>189]);
				\DB::table('communes')->insert(['name_en' => 'Prey Kabbas','name_kh' => 'ព្រៃកប្បាស','district_id'=>189]);
				\DB::table('communes')->insert(['name_en' => 'Prey Lvea','name_kh' => 'ព្រៃល្វា','district_id'=>189]);
				\DB::table('communes')->insert(['name_en' => 'Prey Phdau','name_kh' => 'ព្រៃផ្តៅ','district_id'=>189]);
				\DB::table('communes')->insert(['name_en' => 'Snao','name_kh' => 'ស្នោ','district_id'=>189]);
				\DB::table('communes')->insert(['name_en' => 'Tang Yab','name_kh' => 'តាំងយ៉ាប','district_id'=>189]);
			
			//Bourei Cholsar
				\DB::table('communes')->insert(['name_en' => 'Bourei Cholsar','name_kh' => 'បូរីជលសារ','district_id'=>190]);
				\DB::table('communes')->insert(['name_en' => 'Chey Chouk','name_kh' => 'ជ័យជោគ','district_id'=>190]);
				\DB::table('communes')->insert(['name_en' => 'Doung Khpos','name_kh' => 'ដូងខ្ពស់','district_id'=>190]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Krasang','name_kh' => 'កំពង់ក្រសាំង','district_id'=>190]);
				\DB::table('communes')->insert(['name_en' => 'Kouk Pou','name_kh' => 'គោកពោធិ៍','district_id'=>190]);
			
		//Tboung Khmum
			//Dombae				
				\DB::table('communes')->insert(['name_en' => 'Chong Cheach','name_kh' => 'ចុងជាច','district_id'=>191]);
				\DB::table('communes')->insert(['name_en' => 'Dambae','name_kh' => 'តំបែរ','district_id'=>191]);
				\DB::table('communes')->insert(['name_en' => 'Kouk Srok','name_kh' => 'គោកស្រុក','district_id'=>191]);
				\DB::table('communes')->insert(['name_en' => 'Neang Teut','name_kh' => 'នាងទើត','district_id'=>191]);
				\DB::table('communes')->insert(['name_en' => 'Seda','name_kh' => 'សេដា','district_id'=>191]);
				\DB::table('communes')->insert(['name_en' => 'Trapeang Pring','name_kh' => 'ត្រពាំងព្រីង','district_id'=>191]);
				\DB::table('communes')->insert(['name_en' => 'Tuek Chrov','name_kh' => 'ទឹកជ្រៅ','district_id'=>191]);
			
			//Memot
				\DB::table('communes')->insert(['name_en' => '','name_kh' => 'ចាន់មូល','district_id'=>192]);
				\DB::table('communes')->insert(['name_en' => 'Anhchaeum ','name_kh' => 'អញ្ចើម','district_id'=>192]);
				\DB::table('communes')->insert(['name_en' => 'Boeng Pruol','name_kh' => 'បឹងព្រួល','district_id'=>192]);
				\DB::table('communes')->insert(['name_en' => 'Chikor','name_kh' => 'ជីគរ','district_id'=>192]);
				\DB::table('communes')->insert(['name_en' => 'Chirou Ti Muoy','name_kh' => 'ជីរោទ៍ទី១','district_id'=>192]);
				\DB::table('communes')->insert(['name_en' => 'Chirou Ti Pir','name_kh' => 'ជីរោទ៍ទី២','district_id'=>192]);
				\DB::table('communes')->insert(['name_en' => 'Chob ','name_kh' => 'ជប់','district_id'=>192]);
				\DB::table('communes')->insert(['name_en' => 'Lngieng','name_kh' => 'ល្ងៀង','district_id'=>192]);
				\DB::table('communes')->insert(['name_en' => 'Kor ','name_kh' => 'គរ','district_id'=>192]);
				\DB::table('communes')->insert(['name_en' => 'Mong Riev','name_kh' => 'មង់រៀវ','district_id'=>192]);
				\DB::table('communes')->insert(['name_en' => 'Peam Chileang','name_kh' => 'ពាមជីលាំង','district_id'=>192]);
				\DB::table('communes')->insert(['name_en' => 'Roka Po Pram','name_kh' => 'រកាពប្រាំ','district_id'=>192]);
				\DB::table('communes')->insert(['name_en' => 'Sralab ','name_kh' => 'ស្រឡប់','district_id'=>192]);
				\DB::table('communes')->insert(['name_en' => 'Thma Pech','name_kh' => 'ថ្មពេជ្រ','district_id'=>192]);
				\DB::table('communes')->insert(['name_en' => 'Tonle Bet','name_kh' => 'ទន្លេបិទ','district_id'=>192]);
			
			//Ponhea Kraek
				
				\DB::table('communes')->insert(['name_en' => 'Dountei ','name_kh' => 'ដូនតី','district_id'=>193]);
				\DB::table('communes')->insert(['name_en' => 'Kak ','name_kh' => 'កក់','district_id'=>193]);
				\DB::table('communes')->insert(['name_en' => 'Kandaol Chrum','name_kh' => 'កណ្ដោលជ្រុំ','district_id'=>193]);
				\DB::table('communes')->insert(['name_en' => 'Kaong Kang','name_kh' => 'កោងកាង','district_id'=>193]);
				\DB::table('communes')->insert(['name_en' => 'Kraek ','name_kh' => 'ក្រែក','district_id'=>193]);
				\DB::table('communes')->insert(['name_en' => 'Popel ','name_kh' => 'ពពេល','district_id'=>193]);
				\DB::table('communes')->insert(['name_en' => 'Trapeang Phlong','name_kh' => 'ត្រពាំងផ្លុង','district_id'=>193]);
				\DB::table('communes')->insert(['name_en' => 'Veal Mlu','name_kh' => 'វាលម្លូរ','district_id'=>193]);
				
			//Krouch Chhma
				\DB::table('communes')->insert(['name_en' => 'Chhuk ','name_kh' => 'ឈូក','district_id'=>194]);
				\DB::table('communes')->insert(['name_en' => 'Chumnik ','name_kh' => 'ជំនីក','district_id'=>194]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Treas ','name_kh' => 'កំពង់ទ្រាស','district_id'=>194]);
				\DB::table('communes')->insert(['name_en' => 'Kaoh Pir','name_kh' => 'កោះពីរ','district_id'=>194]);
				\DB::table('communes')->insert(['name_en' => 'Krouch Chhmar ','name_kh' => 'ក្រូចឆ្មារ','district_id'=>194]);
				\DB::table('communes')->insert(['name_en' => 'Peus Muoy ','name_kh' => 'ប៉ឺស១','district_id'=>194]);
				\DB::table('communes')->insert(['name_en' => 'Peus Pir','name_kh' => 'ប៉ឺស២','district_id'=>194]);
				\DB::table('communes')->insert(['name_en' => 'Preaek A Chi ','name_kh' => 'ព្រែកអាជី','district_id'=>194]);
				\DB::table('communes')->insert(['name_en' => 'Roka Khnor ','name_kh' => 'រការខ្នុរ','district_id'=>194]);
				\DB::table('communes')->insert(['name_en' => '	Svay Khleang ','name_kh' => 'ស្វាយឃ្លាំង','district_id'=>194]);
				\DB::table('communes')->insert(['name_en' => 'Trea ','name_kh' => 'ទ្រា','district_id'=>194]);
				\DB::table('communes')->insert(['name_en' => 'Tuol Snuol ','name_kh' => 'ទួលស្នួល','district_id'=>194]);
			
			//Tboung Khmum
				\DB::table('communes')->insert(['name_en' => 'Ancheum','name_kh' => 'អញ្ចើម','district_id'=>195]);
				\DB::table('communes')->insert(['name_en' => 'Beung Proul','name_kh' => 'បឹងព្រួល','district_id'=>195]);
				\DB::table('communes')->insert(['name_en' => 'Chikor','name_kh' => 'ជីគរ','district_id'=>195]);
				\DB::table('communes')->insert(['name_en' => 'Chiror 1','name_kh' => 'ជីរោទ៍ទី១','district_id'=>195]);
				\DB::table('communes')->insert(['name_en' => 'Chiror 2','name_kh' => 'ជីរោទ៍ទី២','district_id'=>195]);
				\DB::table('communes')->insert(['name_en' => 'Chub','name_kh' => 'ជប់','district_id'=>195]);
				\DB::table('communes')->insert(['name_en' => 'Kor','name_kh' => 'គរ','district_id'=>195]);
				\DB::table('communes')->insert(['name_en' => 'Lgnieng','name_kh' => 'ល្ងៀង','district_id'=>195]);
				\DB::table('communes')->insert(['name_en' => 'Mong Reav','name_kh' => 'មង់រៀវ','district_id'=>195]);
				\DB::table('communes')->insert(['name_en' => 'Peam Chileang','name_kh' => 'ពាមជីលាំង','district_id'=>195]);
				\DB::table('communes')->insert(['name_en' => 'Roka Por Bram','name_kh' => 'រកាពប្រាំ','district_id'=>195]);
				\DB::table('communes')->insert(['name_en' => 'Srolob','name_kh' => 'ស្រឡប់','district_id'=>195]);
				\DB::table('communes')->insert(['name_en' => 'Thmar Pich','name_kh' => 'ថ្មពេជ្រ','district_id'=>195]);
				\DB::table('communes')->insert(['name_en' => 'Tonle Bet','name_kh' => 'ទន្លេបិទ','district_id'=>195]);
			
			//Ou Reang Ov
				\DB::table('communes')->insert(['name_en' => 'Ampil Ta Pok','name_kh' => 'ពិលតាពក','district_id'=>196]);
				\DB::table('communes')->insert(['name_en' => 'Chak ','name_kh' => 'ចក','district_id'=>196]);
				\DB::table('communes')->insert(['name_en' => 'Damril ','name_kh' => 'ដំរិល','district_id'=>196]);
				\DB::table('communes')->insert(['name_en' => 'Kong Chey','name_kh' => 'គងជ័យ','district_id'=>196]);
				\DB::table('communes')->insert(['name_en' => 'Mien ','name_kh' => 'មៀន','district_id'=>196]);
				\DB::table('communes')->insert(['name_en' => 'Preah Theat','name_kh' => 'ព្រះធាតុ','district_id'=>196]);
				\DB::table('communes')->insert(['name_en' => 'Tuol Souphi','name_kh' => 'ទួលសូភី','district_id'=>196]);
				
			//Krong Suong
				\DB::table('communes')->insert(['name_en' => 'Suong','name_kh' => '','district_id'=>197]);
				\DB::table('communes')->insert(['name_en' => 'Vihear Loung','name_kh' => '','district_id'=>197]);
			
	}	
}
