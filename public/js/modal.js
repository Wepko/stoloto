const m = {}


function _createMadal(option) {
	const modal = document.createElement('div')
	const modalWidth = '600px'
	modal.classList.add('mmodal')

	/*	modal.insertAdjacentHTML('afterbegin', `
			<div class="modal-overlay" data-close="true">
				<div class="modal-window" style="width: ${option.width || modalWidth}">
					<div class="modal-head">
						<span class="modal-title">${option.title || 'Модальное окно'}</span>
						${option.closeble ? '<div class="modal-close" data-close="true">&times;</div>' : ''}
					</div>
					<div class="modal-body">
						${option.content || ''}
					</div>
					<div class="modal-footer">
						<button>Ok</button>
						<button>Canel</button>
					</div>
				</div>
			</div>
		`)
	*/
	if (option.typeModal == 'win') {
		modal.insertAdjacentHTML('afterbegin', `
			<div class="modal-overlay" data-close="true">
				<div class="modal-window" style="width: ${option.width || modalWidth}">
					<div class="modal-win">
						<div class="modal-win__container">
							<div class="modal-win__header"><h1>ПОБЕДА!</h1></div>
							<div class="modal-win__content">
								<p>Поздравляем, Вы выиграли!</p>
							</div>
							<div class="modal-win__footer">
								<a href="" class="btn-access" id="canel" data-close="true">Забрал приз</a>
								<a href="" class="btn-access">Играть еще</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		`)
	} 

	if (option.typeModal == 'lose') {
		modal.insertAdjacentHTML('afterbegin', `
			<div class="modal-overlay" data-close="true">
				<div class="modal-window" style="width: ${option.width || modalWidth}">
					<div class="modal-lose">
						<div class="modal-lose__container">
							<div class="modal-lose__header"><h1>Спасибо за участие!</h1></div>
							<div class="modal-lose__content">
								<p>Не упустите прямую трансляцию <br> с розыгрышем призов</p>
								<div>Желаем удачи!</div>
							</div>
							<div class="modal-lose__footer">
								<div class="btn-orange-revers" id="canel" data-close="true" style="padding:10px 80px; ">ок</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		`)
	} 


	document.body.append(modal)
	return modal
}

m.modal = function(option) {
	const ANIMATE = 500
	const $modal = _createMadal(option)
    const $modalClose = $modal.querySelector('.modal-close')
    const $btnOk = $modal.querySelector('#canel')
	console.dir($modal)
	let destroy = false
	const listener = (e) => {
		if (e.target.dataset.close == 'true') interfece.close()
	}


    $modal.addEventListener('click', listener)
    $btnOk.addEventListener('click', listener)

	const interfece = {
		open() {
			if (destroy) {
				return console.log('Method delete .... Create element again')
			}
			$modal.classList.add('open')
		},

		close() {
			$modal.classList.remove('open')
			$modal.classList.add('hide')

			setTimeout(() => {
				$modal.classList.remove('hide')
			}, ANIMATE)
		},

		destroy() {
			$modal.remove()
			$modal.removeEventListener('click', listener)
			destroy = true
		}
	}



	return interfece
}


window.m = m