
library(dplyr)
library(plotly)
library(reshape2)
library(lubridate)

df = readxl::read_excel('Integrada_sinNa_con_gallup_2020.xlsx')
set.seed(69)


# por cuestiones de faltantes y variables repetidas 

borrar <- c("Country","Unnamed: 0","year", "...1", "id", "Global Index Rank","Rural", "Urban", "City Economy - Getting worse", "City Economy - Remains the same" ,"City Economy - Getting better","Work hard, get ahead - Yes_x", "Work hard, get ahead - Yes_y", "Work hard, get ahead - Yes_x.1", "Work hard, get ahead - Yes_y.1")
data <- df[ , !(names(df) %in% borrar)]

borrar_gallup <- c("Country", "Unnamed: 0","Goal 1 Score","Goal 2 Score","Goal 3 Score","Goal 4 Score","Goal 5 Score","Goal 6 Score", "Goal 7 Score","Goal 8 Score","Goal 9 Score","Goal 10 Score","Goal 11 Score","Goal 12 Score","Goal 13 Score","Goal 14 Score","Goal 15 Score","Goal 16 Score","Goal 17 Score", "Happiness Score", "Log GDP per capita", "Year","Health (Life Expectancy)","Trust (Government Corruption)","Generosity","Dystopia Residual","Freedom", "year", "...1", "id", "Global Index Rank","Rural", "Urban", "City Economy - Getting worse", "City Economy - Remains the same" ,"City Economy - Getting better","Work hard, get ahead - Yes_x", "Work hard, get ahead - Yes_y", "Work hard, get ahead - Yes_x.1", "Work hard, get ahead - Yes_y.1")
sdg_gallup <- df[ , !(names(df) %in% borrar_gallup)]

sapply(data, function(x) sum(is.na(x)))

sdg_gallup <- sdg_gallup[-which(is.na(sdg_gallup$`NoMon4Food%`)== TRUE),]
data <- data[-which(is.na(data$`NoMon4Food%`)== TRUE),]

sdg_gallup <- sdg_gallup[-which(is.na(sdg_gallup$`confidence_juridical_system_Yes`)== TRUE),]
data <- data[-which(is.na(data$`confidence_juridical_system_Yes`)== TRUE),]


library(partykit)

# Árboles 

# Todo

arbol = partykit::ctree(`Happiness Score` ~ ., data = data, maxdepth = 8)
plot(arbol)

# Gallup para SDG

arbol_2 = partykit::ctree(`Global Index Score (0-100)` ~ ., data = sdg_gallup, maxdepth = 3)
plot(arbol_2)

library(pre)

# Limpieza para que el modelo se coma los nombres de las variables

colnames(data) = gsub(" ", "", colnames(data))
colnames(data) = gsub("-_", "", colnames(data))
colnames(data) = gsub("%", "", colnames(data))
colnames(data) = gsub("-", "", colnames(data))
colnames(data) = gsub("\\(", "", colnames(data))
colnames(data) = gsub("\\)", "", colnames(data))

colnames(sdg_gallup) = gsub(" ", "_", colnames(sdg_gallup))
colnames(sdg_gallup) = gsub("-_", "_", colnames(sdg_gallup))
colnames(sdg_gallup) = gsub("%", "", colnames(sdg_gallup))
colnames(sdg_gallup) = gsub("-", "_", colnames(sdg_gallup))
colnames(sdg_gallup) = gsub("\\(", "", colnames(sdg_gallup))
colnames(sdg_gallup) = gsub("\\)", "", colnames(sdg_gallup))
colnames(sdg_gallup) = gsub("\\)", "", colnames(sdg_gallup))


# Reglas 

model_reglas = pre(HappinessScore ~  . -DystopiaResidual, data=data)
model_reglas_2 = pre(`Global_Index_Score_0_100`~ . , data=sdg_gallup)

coefs_0 = coef(model_reglas) 

coefs = filter(coefs_0, coefficient != 0)              
importancia = importance(model_reglas)
importancias = importancia$varimps
ordered_names = reorder(importancias$varname, desc(importancias$imp)) 

print(importancia$baseimps[1:4,])
is.na(data)
x <- list(
  title = "Variables",titlefont = list(size = 20), tickfont = list(size = 20)
)
y <- list(
  title = "Importance",titlefont = list(size = 20), tickfont = list(size = 20)
)
p <- plot_ly(importancias, x = ~ordered_names[1:7], y = ~imp[1:7] )
p <- p %>% layout(title = "Variable importance", xaxis = x, yaxis = y)
p

