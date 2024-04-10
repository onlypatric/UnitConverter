<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
  <title>Result</title>
</head>
<body>
  		<div class="p-4 md:w-1/3 m-auto">
			<div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
				<div class="p-6">
					<h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">MILE OUTPUT</h2>
					<div class="relative mb-4">
						<label for="mileoutput" class="leading-7 text-sm text-gray-600"><?php echo $_POST["kminput"]?>transformed are: </label>
						<input type="text" id="mileoutput" name="mileoutput"
							class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
							disabled value=<?php echo $_POST["kminput"]*0.621371?>>
					</div>
				</div>
			</div>
		</div>
</body>
</html>