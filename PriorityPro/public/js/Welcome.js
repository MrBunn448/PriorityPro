@for $i from 1 through 30 {
	@keyframes particle-animation-#{$i} {
		100% {
			transform: translate3d((random(90) * 1vw), (random(90) * 1vh), (random(100) * 1px));
		}
	}
	
	.particle:nth-child(#{$i}){
		animation: particle-animation-#{$i} 60s infinite;
		$size: random(5) + 5 + px;
		opacity: random(100)/100;
		height: $size;
		width: $size;
		animation-delay: -$i * .2s;
		transform: translate3d((random(90) * 1vw), (random(90) * 1vh), (random(100) * 1px));
		background: hsl(random(360), 70%, 50%);
	}
}