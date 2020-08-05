<?php

class Quiz {

	public function generate() : array {
		
		return 	[
			[
				'question' => '1. De manhã, você:',
				'options' => [
					[
						'option' => 1, 
						'text' => 'Acorda cedo e come frutas cortadas metodicamente.',
					],
					[
						'option' => 2, 
						'text' => 'Sai da cama com o despertador e se prepara para a batalha da semana.',
					],
					[
						'option' => 3, 
						'text' => 'Só consegue lembrar do seu nome depois do café.',
					],
					[
						'option' => 4, 
						'text' => 'Levanta e faz café pra todos da casa.',
					],
					[
						'option' => 5, 
						'text' => 'Passa o café e conserta um erro no HTML.',
					],
				]
			],
			[
				'question' => '2. Indo para o trabalho você encontra uma senhora idosa caída na rua.',
				'options' => [
					[
						'option' => 1, 
						'text' => 'Ela vai atrapalhar seu horário. Oculte o corpo.',
					],
					[
						'option' => 2, 
						'text' => 'Levanta a senhora e jura protegê-la com sua vida.',
					],
					[
						'option' => 3, 
						'text' => 'Ajuda-a, mas questiona sua real identidade.',
					],
					[
						'option' => 4, 
						'text' => 'Oferece para caminharem juntos até um destino em comum.',
					],
					[
						'option' => 5, 
						'text' => 'Testa se ela roda bem no Firefox. Não roda.',
					],
				]
			],
			[
				'question' => '3. Chega no prédio e o elevador está cheio.',
				'options' => [
					[
						'option' => 1, 
						'text' => 'Convence parte das pessoas a esperarem o próximo.',
					],
					[
						'option' => 2, 
						'text' => 'Ignora as pessoas no elevador e entra de qualquer forma.',
					],
					[
						'option' => 3, 
						'text' => 'Você questiona a realidade, as coisas e tudo mais. Sobe de escada.',
					],
					[
						'option' => 4, 
						'text' => 'Com uma leve intimidação passivo-agressiva, encontra um lugar no elevador.',
					],
					[
						'option' => 5, 
						'text' => 'Cria um app que mostra a lotação do elevador. Vende o app e fica milionário.',
					],
				]
			],
			[
				'question' => '4. Você chega no trabalho e as convenções sociais te obrigam a puxar assunto.',
				'options' => [
					[
						'option' => 1, 
						'text' => 'Fala sobre a política, eleições, como tudo é um absurdo.',
					],
					[
						'option' => 2, 
						'text' => 'Larga uma frase polêmica e vê uma pequena guerra se formar.',
					],
					[
						'option' => 3, 
						'text' => 'Puxa um assunto e te lembram que já foi discutido semana passada.',
					],
					[
						'option' => 4, 
						'text' => 'Sugere que os colegas trabalhem na ideia de um novo projeto.',
					],
					[
						'option' => 5, 
						'text' => 'Desabafa sobre como odeia PHP. Todo mundo na sala adora PHP.',
					],
				]
			],
			[
				'question' => '5. A pauta pegou o dia todo, mas você está indo para casa.',
				'options' => [
					[
						'option' => 1, 
						'text' => 'Vou chamar aqui o meu Uber.',
					],
					[
						'option' => 2, 
						'text' => 'Pegarei o bus junto com o resto do povo.',
					],
					[
						'option' => 3, 
						'text' => 'No ponto de ônibus mais uma vez, espero não errar a linha de novo.',
					],
					[
						'option' => 4, 
						'text' => 'Vou de carro, mas ofereço uma carona para os colegas.',
					],
					[
						'option' => 5, 
						'text' => 'Acho que descobri uma forma de fazer aquela senhora rodar no Firefox.',
					],
				]
			],

		];
	}

	public function answers(array $data) : string {

		$options = array_count_values($data);
		$selected = array_keys($options, max($options));

		$position = $selected[0];

		if(count($selected) > 1) {
			$reverse = array_reverse($data, true);
		    foreach($reverse as $val) {
		        if(in_array($val, $selected)) {
		            $position = $val;
		            break;
		        }
		    }
		}

		return $this->result((int) $position);
	}

	public function result(int $position) : string {

		$options = [
			1 => '<b>House of Cards:</b> Você é House of Cards: ataca o problema com método e faz de tudo para resolver a situação.',
			2 => '<b>Game of Thrones</b>: Você é Game of Thrones: não tem muita delicadeza nas ações, mas resolve o problema de forma prática.',
			3 => '<b>Lost: Você é Lo</b>st: faz as coisas sem ter total certeza se é o caminho certo ou se faz sentido, mas no final dá tudo certo.',
			4 => '<b>Breaking Bad: V</b>ocê é Breaking Bad: pra fazer acontecer você toma a liderança, mas sempre contando com seus parceiros.',
			5 => '<b>Silicon Valley:</b> Você é Silicon Valley: vive a tecnologia o tempo todo e faz disso um mantra para cada situação no dia.',
		];

		return $options[$position];
	}
}
