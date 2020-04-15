def kaprekar_calculation(kaprekar_array)
  for i in 1..15 do
    num = (0..9).to_a
    num.repeated_combination(i){|num_array|
      num_max = num_array.sort.reverse.join.to_i
      num_min = num_array.sort.join.to_i
      sum =  num_max - num_min
      kaprekar_array << sum if num_array  == sum.to_s.split('').map(&:to_i).sort
    }
  end
  kaprekar_array = kaprekar_array.sort
  return kaprekar_array
end

def kaprekar_search(kaprekar_array, n)
  kaprekar_array.each do |a|
    if a >= n
      puts a
      break
    end
  end
end

def input(kaprekar_array)
  kaprekar_array = kaprekar_array
  n = gets.to_i
  if 0 <= n && n <= 10 ** 13 && kaprekar_array.empty?
    kaprekar_calculation(kaprekar_array)
    puts "#{n}以上のカプレカ数"
    kaprekar_search(kaprekar_array ,n)
    input(kaprekar_array)
  elsif 0 <= n && n <= 10 ** 13
    kaprekar_search(kaprekar_array ,n)
    input(kaprekar_array)
  else
    input(kaprekar_array)
  end
end

kaprekar_array = []
input(kaprekar_array)